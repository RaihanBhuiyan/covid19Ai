<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,Response;
use Session;

class RegisterController extends Controller
{
  public function postRegistration(Request $request)
  {
      request()->validate([
        'ORGName' => 'required',
        'ContactNo' => 'required|max:11|min:11',
        'address' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
      ]);
      $response=Http::withHeaders([
            'x-api-key' => 'covid192020',
        ])
        ->post('http://52.77.185.229:5000/api/user/registration', [
            'ORGName' => $request->ORGName,
            'ContactNo' => $request->ContactNo,
            'Address' => $request->address,
            'Email' => $request->email,
            'Password' => $request->password,
        ]);
        $data = $response->json();
        
        // echo '<pre>';
        // print_r($data);
        //  exit();
        if (array_key_exists("data",$data['response']))
        {
             $token_decode = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $data['response']['data'])[1]))));
             $uuid = get_object_vars($token_decode);
             $request->session()->push('uuid', $uuid['UUID']);

             Session::flash('success','A Six Digit OTP Send to Your Email');
             return view('admin.login.otp',['uuid'=>$uuid['UUID']]);
             //return redirect()->intended('otp',['uuid'=>$uuid['UUID']]);
         }
         if($data['response']['status']=='User already registered')
         {
            Session::flash('error','User already registered');
            return Redirect::to("registration");
         }
         Session::flash('Error','Invalid Information');
         return Redirect::to("registration");
      //
      // return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
  }
  public function Otp(Request $request)
  {
      request()->validate([
        'otp' => 'required'
      ]);
      $response=Http::withHeaders([
            'x-api-key' => 'covid192020',
        ])
        ->post('http://52.77.185.229:5000/api/user/otp', [
            'UUID' => $request->uuid,
            'OTP' => $request->otp
        ]);



        $data = $response->json();
         // echo '<pre>';
         // print_r($data);
         // exit();
         if($data['response']['status'] == 'ok')
         {
              Session::flash('success','Please wait till your host active your account.');
              return Redirect::to('/');
         }
         else if($data['response']['status'] == 'OTP expired')
         {
              Session::flash('error','Your otp expired');
              return Redirect::to("registration");
         }
         else
         {
           //return \Redirect::route('Otp', ['uuid'=>$request->uuid]);
            return redirect()->intended('Otp', ['uuid'=>$request->uuid]);
         }
       // $data['response']['status'] = 'ok';--login

        // [status] => OTP expired--singup
        // OTP expired
        // Input field required--otp page redirect with uuid

      // return view('admin.login.otp');
  }
}
