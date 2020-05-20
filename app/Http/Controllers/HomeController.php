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

      $country_status = Http::get('https://corona.lmao.ninja/v2/countries?yesterday&sort');
      $all_contry_status = $country_status->json();

      $bd_total_Status= collect($all_contry_status)->where('country','Bangladesh')->flatten()->all();


        $BdDailyStatistics = Http::get('https://api.thevirustracker.com/free-api?countryTimeline=BD');
        $DailyBdStatistics = $BdDailyStatistics->json();

        $statistic_case_dailyBD = collect($DailyBdStatistics['timelineitems'][0])->pluck('new_daily_cases')->toArray();
        $statistic_death_dailyBD = collect($DailyBdStatistics['timelineitems'][0])->pluck('new_daily_deaths')->toArray();

        $period = CarbonPeriod::create('2020-03-08', date("Y-m-d"));
        $dates=[];
        foreach ($period as $date) 
        {
             $dates[]= $date->format('d M');
        }

        
        return view('front.main.main',[
          'Worldstatus'=>$worldData,
          'countryStatus' =>$all_contry_status,
          'bdstatus'=>$bd_total_Status,
          'dailyBdCases' => $statistic_case_dailyBD,
          'dailyBdDeath' => $statistic_death_dailyBD,
          'statisticsDate' => $dates
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
