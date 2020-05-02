<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('front');
// });

Route::get('/','HomeController@index');
Route::get('/aboutUs','HomeController@AboutUs')->name('aboutUs');
Route::get('/info','HomeController@Information')->name('info');

// Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'RegisterController@postRegistration');
Route::post('Otp', 'RegisterController@Otp');
// Route::get('home', 'AuthController@home');

Route::get('logout', 'AuthController@logout');

Route::get('patients','PatientController@index')->name('patients');
Route::get('/patient-report/{key}','PatientController@PatientReport')->name('patient_report');

Route::get('/diagnosis', 'PatientController@Diagnosis')->name('diagnosis');
Route::post('/patients/save', 'PatientController@savePatient')->name('save_patient');
Route::get('/patients/report', 'PatientController@ReportPatient')->name('report');

Route::get('/patients/pdf/{key}', 'PatientController@Pdf_Report')->name('pdf');
Route::get('/pdf_diag', 'PatientController@pdf_diag');




// Route::get('/DaigPdf/{key}', 'PatientController@Pdf_Report_Daig')->name('DaigPdf');
