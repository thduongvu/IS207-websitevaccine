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
Route::get('/test','HomeController@test');
Route::get('/extension','HomeController@extension');
Route::get('/childcalendar','HomeController@childcalendar');
Route::get('/adultcalendar','HomeController@adultcalendar');

Route::get('/vaccinelist','HomeController@vaccinelist');
Route::get('/vaccinetype','HomeController@vaccinetype');








