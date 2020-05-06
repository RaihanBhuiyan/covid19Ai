<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
Use App\Patient;
use Session;
use PDF;

class PatientController extends Controller
{
    public function index(Request $request)
    {

        $uuid=Session::get('uuid');
        $uuid = $uuid[0];

        $response =Http::withHeaders([
             'x-api-key' => 'covid192020',
         ])->post('http://52.77.185.229:5000/api/patient_list',[
           'UUID' => $uuid,
         ]);

       $data = $response->json();
       // echo '<pre>';
       // print_r($data);
       // exit();

       if (array_key_exists("data",$data['response'])){
         return view('admin.patients.patients',['myData'=>$data['response']['data']]);
        }

    }
    public function prescription($key)
    {
        return view('admin.patients.prescription',[$key]);
    }

    public function Diagnosis()
    {
        $uuid=Session::get('uuid');
        $uuid = $uuid[0];
        if($uuid)
        {
            return view('admin.patients.diagnosis'); 
        }
        Session::flash('Error','Invelid');
        return Redirect("/");
    }

    protected function validatePatient($request){
		    	$this->validate($request,
		    		[
			    		'name' => 'required',
              'sex' => 'required|max:4294967295',
              'age' => 'required|numeric|gt:0',
              'contact' => 'required|numeric|digits:11',
              'address' => 'required',
			    		'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
              'date' => 'required'
			    	],
			    	[
			        	'image.image' => 'Please make sure your image is jpeg,png,jpg'
			    	]
		    	);
        }
    public function savePatient(Request $request)
    {
        $this->validatePatient($request);

        $file = $request->file('image');
        $fileName = uniqid().'_'.$request->contact.'.jpeg';
        $source = Storage::putFileAs('public/patient', $file, $fileName);
        if($fileName){

              $uuid=Session::get('uuid');
              $uuid = $uuid[0];

              $Organization = Session::get('Organization');
              $Org = $Organization[0];

              $client = new Client();
              $response = $client->request('POST', 'http://52.77.185.229:5000/api/covid19_detection', [
                  'headers' => [
                      'x-api-key' => 'covid192020'
                  ],
                  'multipart' => [
                      [
                          'name' => 'UUID',
                          'contents' => $uuid
                      ],
                      [
                          'name' => 'Date',
                          'contents' => $request->date
                      ],
                      [
                          'name' => 'Name',
                          'contents' => $request->name
                      ],
                      [
                          'name' => 'Sex',
                          'contents' => $request->sex
                      ],
                      [
                          'name' => 'Age',
                          'contents' => $request->age
                      ],
                      [
                          'name' => 'ContactNo',
                          'contents' => $request->contact
                      ],
                      [
                          'name' => 'Address',
                          'contents' => $request->address
                      ],
                      [
                          'Content-type' => 'multipart/form-data',
                          'name' => 'Image',
                          'contents' => fopen(storage_path("app/public/patient/".$fileName), 'r')
                      ],
                  ]
              ]);

              $data = json_decode($response->getBody()->getContents(), true);
              $token_decode = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $data['response']['data'])[1]))));
              $dataDecoded = get_object_vars($token_decode);

              // echo '<pre>';
              // print_r($data);
              // exit();

              if($data['response']['status']='ok'){
                 return view('admin.patients.reportafterDaig',['report'=>$dataDecoded,'Organization'=>$Org]);
              }
        }
    }
    public function ReportPatient()
    {
        //return view('admin.patients.report');
    }
    public function PatientReport($key)
    {
        $uuid=Session::get('uuid');
        $uuid = $uuid[0];

        $Organization = Session::get('Organization');
        $Org = $Organization[0];

        $response =Http::withHeaders([
             'x-api-key' => 'covid192020',
         ])->post('http://52.77.185.229:5000/api/patient_list',[
           'UUID' => $uuid,
         ]);

       $data = $response->json();

       // echo '<pre>';
       // print_r($data['response']['data'][$key]);
       // exit();

       if (array_key_exists("data",$data['response'])){
         return view('admin.patients.reportprescript',['keyData'=>$data['response']['data'][$key],'key'=>$key,'Organization'=>$Org]);
        }

    }
    public function Pdf_Report($key)
    {
          $uuid=Session::get('uuid');
          $uuid = $uuid[0];

          $Organization = Session::get('Organization');
          $Org = $Organization[0];

          $response =Http::withHeaders([
               'x-api-key' => 'covid192020',
           ])->post('http://52.77.185.229:5000/api/patient_list',[
             'UUID' => $uuid,
           ]);

           $data = $response->json();

           if (array_key_exists("data",$data['response'])){
             $pdf = PDF::loadView('admin.patients.reportPdf',['keyData'=>$data['response']['data'][$key],'Organization'=>$Org]);

             $pdfDownload = $pdf->stream($data['response']['data'][$key]['Contact_No'].'.pdf');

             return $pdfDownload;
            }
    }

    public function pdf_diag(Request $request)
    {
      $array=json_decode($request->arr);
      $array= json_decode(json_encode($array), true);
      $array=$array[0];

      $Organization = Session::get('Organization');
      $Org = $Organization[0];

      $pdf = PDF::loadView('admin.patients.singlePdf',['keyData'=>$array,'Organization'=>$Org]);
      $pdfDownload = $pdf->stream($array['Contact No'].'.pdf');
      return $pdfDownload;
    }

    // public function Pdf_Report_Daig($key)
    // {
    //     $reportJson = json_decode($key);
    //     print_r($reportJson);
    //     exit();
    // }
}
