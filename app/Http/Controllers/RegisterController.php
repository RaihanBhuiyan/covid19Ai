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
        ->post('http://'.$this->apiurl().'/api/user/registration', [
            'ORGName' => $request->ORGName,
            'ContactNo' => $request->ContactNo,
            'Address' => $request->address,
            'Email' => $request->email,
            'Password' => $request->password,
        ]);



        $data = $response->json();
        
        // echo '<pre>';
        // print_r($data['response']);
        // exit();

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
         // Session::flash('Error','Invalid Information');
         // return Redirect::to("registration");
  }
  public function Otp(Request $request)
  {
      request()->validate([
        'otp' => 'required'
      ]);
      $response=Http::withHeaders([
            'x-api-key' => 'covid192020',
        ])
        ->post('http://'.$this->apiurl().'/api/user/otp', [
            'UUID' => $request->uuid,
            'OTP' => $request->otp
        ]);

          // $ResStatus = $response->status();
          // echo '<pre>';
          // print_r($ResStatus);
          // exit();

        $data = $response->json();
         // echo '<pre>';
         // print_r($data);
         // exit();
         if($response->successful())
         {
              Session::flash('success','Please wait till your host active your account.');
              return Redirect::to('/');
         }
         else if($response->status()==403)
         {
              Session::flash('error','Your otp expired');
              return Redirect::to('/');
         }
         else if($response->status()==400)
         {
              Session::flash('error','You have enter an Invalid otp');

         }
         // else
         // {
         //   //return \Redirect::route('Otp', ['uuid'=>$request->uuid]);
         //    return redirect()->intended('Otp', ['uuid'=>$request->uuid]);
         // }
  }
}
