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
Route::get('/test','HomeController@test')->name('test');

Route::get('/test1','HomeController@test1');
//Route::get('/chi-tiet-vac-xin/{id}','HomeController@test');

Route::post('/test',  'HomeController@posttest')->name('posttest');


Route::get('/extension','HomeController@extension');
Route::get('/childcalendar','HomeController@childcalendar');
Route::get('/adultcalendar','HomeController@adultcalendar');

Route::get('/vaccinelist','HomeController@vaccinelist')->name('vaccinelist');;
Route::get('/vaccinestatus','VaccineController@tablevaccine');

Route::get('/vaccinetype','HomeController@vaccinetype');
Route::get('/chi-tiet-vac-xin/{id}','HomeController@detailvaccine');


Route::get('/vaccinefull','HomeController@vaccinefull');

Route::get('vaccinefull/add-favo/{id}', 'HomeController@addtofavo')->name('addtofavo');

Route::get('/choose','HomeController@choose');

Route::get('/developing','HomeController@developing');








