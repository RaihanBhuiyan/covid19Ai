<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,Response;
Use App\User;
Use App\UrlApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
      public function apiurl()
      {
          $check = new UrlApi;
          $ipAddress = $check ->ip_finder();
          return $ipAddress;
      }
      public function postLogin(Request $request)
      {
          

          request()->validate([
          'email' => 'required',
          'password' => 'required|min:8|max:16',
          ]);

          $credentials = $request->only('email', 'password');
          $response=Http::withHeaders([
            'x-api-key' => 'covid192020',
          ])
          ->post('http://'.$this->apiurl().'/api/user/login', [
              'Email' => $request->email,
              'Password' => $request->password,
          ]);


          $data = $response->json();

          if(array_key_exists("data",$data['response']))
          {
                $token_decode = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $data['response']['data'])[1]))));
                $uuid = get_object_vars($token_decode);
                $request->session()->push('uuid', $uuid['UUID']);
                $request->session()->push('Organization', $data['response']['Organization']);
          }
          if($response->successful())
          {
              return redirect()->intended('diagnosis');
          }
          if($response->status()==400)
          {
                Session::flash('warning','Your account is not active!');
                return Redirect("/");
          }
          Session::flash('error','You have entered invalid credentials');
          return Redirect("/");

      }


      public function logout()
      {
          Session::flush();
          return Redirect('/');
      }
}
