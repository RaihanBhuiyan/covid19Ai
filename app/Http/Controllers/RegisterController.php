<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,Response;
use Session;
Use App\UrlApi;

class RegisterController extends Controller
{
  public function apiurl()
  {
      $check = new UrlApi;
      $ipAddress = $check ->ip_finder();
      return $ipAddress;
  }
  public function registration()
  {
      return view('admin.login.registration');
  }
  public function postRegistration(Request $request)
  {
      //return view('admin.login.otp',['uuid'=>'Otp Success']);

      $response=Http::withHeaders([
            'x-api-key' => 'covid192020',
        ])
        ->post('http://'.$this->apiurl().'/api/user/registration', [
            'ORGName' => $request->ORGName,
            'ContactNo' => $request->ContactNo,
            'Address' => $request->address,
            'Email' => $request->email,
            'Password' => $request->password,
        ]);


        $data = $response->json();

        if (array_key_exists("data",$data['response']))
        {
             $token_decode = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $data['response']['data'])[1]))));
             $uuid = get_object_vars($token_decode);
             $request->session()->push('uuid', $uuid['UUID']);

             Session::flash('success','A Six Digit OTP Send to Your Email');
             return view('admin.login.otp',['uuid'=>$uuid['UUID']]);
             //return redirect()->intended('otp',['uuid'=>$uuid['UUID']]);
         }
         if($response->clientError())
         {
            Session::flash('error','User already registered');
            return Redirect::to("registration");
         }
  }
  public function Otp(Request $request)
  {



      $response=Http::withHeaders([
            'x-api-key' => 'covid192020',
        ])
        ->post('http://'.$this->apiurl().'/api/user/otp', [
            'UUID' => $request->uuid,
            'OTP' => $request->otp
        ]);


        $data = $response->json();

        if($response->successful())
         {  
              Session::flash('successReg1','Registration Successful');
              Session::flash('successReg2','Please wait until your account is active');
              $msg = 'success';
         }
         else if($response->status()==403)
         {
              Session::flash('error','Your otp expired');
              $msg = 'Expered';
         }
         else if($response->status()==400)
         {
              $msg = 'invalid';

         }
        return $msg;
  }
}
