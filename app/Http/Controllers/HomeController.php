<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {

      $responseWorld = Http::get('https://coronavirus-19-api.herokuapp.com/all');
      $worldData = $responseWorld->json();

      $responseCountry = Http::get('https://coronavirus-19-api.herokuapp.com/countries');
      $Countrydata = $responseCountry->json();

      $BDdata = collect($Countrydata)->where('country','Bangladesh')->flatten()->all();


        return view('front.main.main',[
          'Worldstatus'=>$worldData,
          'countryStatus' =>$Countrydata,
          'bdstatus'=>$BDdata
        ]);
    }
    public function AboutUs()
    {
        return view('front.main.aboutUs');
    }
    public function Information()
    {
      return view('front.main.info');
    }
}
