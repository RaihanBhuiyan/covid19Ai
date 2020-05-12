<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \Carbon\Carbon;
use Carbon\CarbonPeriod;

class HomeController extends Controller
{
    public function index()
    {

      $responseWorld = Http::get('https://coronavirus-19-api.herokuapp.com/all');
      $worldData = $responseWorld->json();

      // $responseCountry = Http::get('https://coronavirus-19-api.herokuapp.com/countries');
      // $Countrydata = $responseCountry->json();
      // $BDdata = collect($Countrydata)->where('country','Bangladesh')->flatten()->all();


      $bdSt = Http::get('https://corona.lmao.ninja/v2/countries?yesterday&sort');
      $bdStatistics = $bdSt->json();
      $bdSts= collect($bdStatistics)->where('country','Bangladesh')->flatten()->all();


        $BdDaily = Http::get('https://api.thevirustracker.com/free-api?countryTimeline=BD');
        $DaiilyBdSts = $BdDaily->json();



        // echo '<pre>';
        // print_r($DaiilyBdSts['timelineitems'][0]);
        // exit();

        // $period = CarbonPeriod::create('2020-03-08', '2020-05-10');
        // $dates=[];
        // //$dataArr = $DaiilyBdSts['timelineitems'][0];

        // foreach ($period as $date) 
        // {
        //     $dates[]= $date->format('m/d/y');
        // }
        // $dates = $period->toArray();
        // echo '<pre>';
        // print_r($dates);
        // exit();

        // $period = CarbonPeriod::create('2020-03-08', date("Y-m-d"));
        // // Iterate over the period
        // //$dataArr = $DaiilyBdSts['timelineitems'][0];
        // $dates=[];
        // foreach ($period as $date) {
        //      $dates[]= $date->format('m/d/y');

             
        // }
        // echo '<pre>';
        // print_r($dates);
        // exit();

        // Convert the period to an array of dates
        // $dates = $period->toArray();

        

        return view('front.main.main',[
          'Worldstatus'=>$worldData,
          'countryStatus' =>$bdStatistics,
          'bdstatus'=>$bdSts,
          'dailyBDstatus' => $DaiilyBdSts
        ]);
    }
    public function AboutDeveloper()
    {
        return view('front.main.aboutDeveloper');
    }
    public function Information()
    {
      return view('front.main.info');
    }
}
