<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
      public function registration()
      {
          return view('admin.login.registration');
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
          ->post('http://52.77.185.229:5000/api/user/login', [
              'Email' => $request->email,
              'Password' => $request->password,
          ]);
          $data = $response->json();
          // echo '<pre>';
          // print_r($data);
          // exit();
          if(array_key_exists("data",$data['response'])){
            $token_decode = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $data['response']['data'])[1]))));
            $uuid = get_object_vars($token_decode);
            $request->session()->push('uuid', $uuid['UUID']);
          }
          if($data['response']['status']=='ok'){
              return redirect()->intended('/diagnosis');
          }
          if($data['response']['status']=='User account not active'){
            Session::flash('alert','Your account is not active!!Please wait for active');
            return Redirect::to("/")->withSuccess('Your account is not active!!Please wait for active');
          }


          Session::flash('error','Oppes! You have entered invalid credentials');
          return Redirect::to("/")->withSuccess('Oppes! You have entered invalid credentials');
      }

      public function home(Request $request)
      {
        if($request->session()->has('uuid')){

          $responseWorld = Http::get('https://coronavirus-19-api.herokuapp.com/all');
          $worldData = $responseWorld->json();

          $responseCountry = Http::get('https://coronavirus-19-api.herokuapp.com/countries');
          $Countrydata = $responseCountry->json();

          $BDdata = collect($Countrydata)->where('country','Bangladesh')->flatten()->all();
          // echo '<pre>';
          // print_r($BDdata);
          // exit();
          return view('admin.home.home',[
            'Worldstatus'=>$worldData,
            'countryStatus' =>$Countrydata,
            'bdstatus'=>$BDdata
          ]);

          //return view('admin.home.home');
        }
        Session::flash('Error','Invelid');
        return Redirect('/');
      }

      public function create(array $data)
      {
        return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password'])
        ]);
      }

      public function logout()
      {
          Session::flush();
          Auth::logout();
          return Redirect('/');
      }
}
