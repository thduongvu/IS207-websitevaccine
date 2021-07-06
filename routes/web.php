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
Route::get('/bs1','HomeController@bs1');
Route::get('/bs2','HomeController@bs2');
Route::get('/bs3','HomeController@bs3');
Route::get('/bs6','HomeController@bs6');


Route::post('/posttest',  'HomeController@posttest')->name('posttest');

Route::post('/postlogin',  'HomeController@postlogin')->name('postlogin');

Route::get('/dangky','HomeController@dangky');

Route::post('/postdangky','HomeController@postdangky')->name('postdangky');

Route::get('/extension','HomeController@extension');
Route::get('/childcalendar','HomeController@childcalendar');
Route::get('/adultcalendar','HomeController@adultcalendar');

Route::get('/vaccinelist','HomeController@vaccinelist')->name('vaccinelist');
Route::get('/vaccinestatus','VaccineController@tablevaccine');
Route::get('/vaccinestatussearch',[
   'as' => 'vaccine.search',
   'uses' => 'VaccineController@search'
]);

Route::get('/vaccinetype','HomeController@vaccinetype');
Route::get('/chi-tiet-vac-xin/{id}','HomeController@detailvaccine');


Route::get('/vaccinefull','HomeController@vaccinefull');

Route::get('vaccinefull/add-favo/{id}', 'HomeController@addtofavo')->name('addtofavo');

Route::get('/choose','HomeController@choose');

Route::get('/developing','HomeController@developing');

Route::get('/search','HomeController@search');

// send mail
Route::get('/send-mail','HomeController@send_mail');

Route::get('/send-report','HomeController@send_report');


//admin
Route::get('/login', 'AdminController@loginAdmin');
Route::post('/login', 'AdminController@postloginAdmin');


Route::get('/adminhome', [
    'as' => 'adminhome.index',
    'uses' => 'AdminHomeController@index'
]);

Route::prefix('vaccines')->group(function () {
    Route::get('/', [
        'as' => 'vaccines.index',
        'uses' => 'VaccineController@index'
    ]);

    Route::get('/create', [
        'as' => 'vaccines.create',
        'uses' => 'VaccineController@create'
    ]);

    Route::post('/store', [
        'as' => 'vaccines.store',
        'uses' => 'VaccineController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'vaccines.edit',
        'uses' => 'VaccineController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'vaccines.update',
        'uses' => 'VaccineController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'categories.delete',
        'uses' => 'VaccineController@delete'
    ]);
});

Route::prefix('slider')->group(function () {
    Route::get('/', [
        'as' => 'slider.index',
        'uses' => 'AdminSliderController@index'
    ]);

    Route::get('/create', [
        'as' => 'slider.create',
        'uses' => 'AdminSliderController@create'
    ]);

    Route::post('/store', [
        'as' => 'slider.store',
        'uses' => 'AdminSliderController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'slider.edit',
        'uses' => 'AdminSliderController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'slider.update',
        'uses' => 'AdminSliderController@update'
    ]);
});

Route::prefix('immunizer')->group(function () {
    Route::get('/', [
        'as' => 'immunizer.index',
        'uses' => 'AdminImmunizerController@index'
    ]);
    Route::get('/search', [
        'as' => 'immunizer.search',
        'uses' => 'AdminImmunizerController@search'
    ]);
});

Route::prefix('appointment')->group(function () {
    Route::get('/', [
        'as' => 'appointment.index',
        'uses' => 'AdminAppoinmentController@index'
    ]);
    Route::get('/search', [
        'as' => 'appointment.search',
        'uses' => 'AdminAppoinmentController@search'
    ]);
});

Route::prefix('news')->group(function () {
    Route::get('/', [
        'as' => 'news.index',
        'uses' => 'AdminNewsController@index'
    ]);

    Route::get('/create', [
        'as' => 'news.create',
        'uses' => 'AdminNewsController@create'
    ]);

    Route::post('/store', [
        'as' => 'news.store',
        'uses' => 'AdminNewsController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'news.edit',
        'uses' => 'AdminNewsController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'news.update',
        'uses' => 'AdminNewsController@update'
    ]);
});









