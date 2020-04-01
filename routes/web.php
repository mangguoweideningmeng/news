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

Route::get('/login', 'LoginController@login');
Route::post('logindo', 'LoginController@logindo');


Route::prefix('property')->group(function(){
    Route::get('create','PropertyController@create');
    //Route::post('store','PropertyController@store');
    //Route::get('index','PropertyController@index');
    //Route::get('edit/{id}','PropertyController@edit');
    //Route::post('update/{id}','PropertyController@update');
    //Route::get('destroy/{id}','PropertyController@destroy');
});

Route::prefix('news')->group(function(){
    Route::get('create','NewsController@create');
    Route::post('store','NewsController@store');
    Route::get('index','NewsController@index');
    Route::get('edit/{id}','NewsController@edit');
    //Route::post('update/{id}','NewsController@update');
    //Route::get('destroy/{id}','NewsController@destroy');
});