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


Route::get('/','HomeController@index');
Route::get('/developers','HomeController@AboutDeveloper')->name('aboutDeveloper');
Route::get('/info','HomeController@Information')->name('info');

Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'RegisterController@registration');
Route::post('post-registration', 'RegisterController@postRegistration')->name('post-registration');

Route::post('Otp', 'RegisterController@Otp')->name('Otp');

Route::get('logout', 'AuthController@logout');

Route::group(['middleware' => 'AuthMiddle'],function(){

	Route::get('patients','PatientController@index')->name('patients');
	Route::get('/patient-report/{key}','PatientController@PatientReport')->name('patient_report');

	Route::get('/diagnosis', 'PatientController@Diagnosis')->name('diagnosis');
	Route::post('/patients/save', 'PatientController@savePatient')->name('save_patient');

	Route::get('/patients/pdf/{key}', 'PatientController@Pdf_Report')->name('pdf');
	Route::get('/pdf_diag', 'PatientController@pdf_diag');

});


