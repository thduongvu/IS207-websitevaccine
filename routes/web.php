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

Route::get('/login', 'AdminController@loginAdmin');
Route::post('/login', 'AdminController@postloginAdmin');


Route::get('/adminhome', function () {
    return view('admin.home');
});

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



