<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', 'DashboardController@index')->name('home');



Route::resource('division', 'PoliceDivisionController');
Route::get('division/{division}/area', 'PoliceDivisionController@divisionBasedArea');

Route::resource('area', 'PoliceAreaController');
Route::get('area/{area}/zone', 'PoliceAreaController@areaBasedZone');

Route::resource('zone', 'PoliceZoneController');
Route::get('zone/{zone}/district', 'PoliceZoneController@zoneBasedDistrict');

Route::resource('district', 'PoliceDistrictController');
Route::get('district/{district}/thana', 'PoliceDistrictController@districtBasedThana');

Route::resource('thana', 'PoliceThanaController');

Route::resource('fari', 'PoliceFariController');

Route::get('complain/thana', 'ComplainController@complainBasedThana')->name('complain.thana');
Route::get('complain/fari', 'ComplainController@complainBasedFari')->name('complain.fari');
Route::resource('complain', 'ComplainController');
