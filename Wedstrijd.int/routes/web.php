<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Dashboard 
    Route::get('/dashboard', 'UserController@index');
	Route::get('/dashboard/delete/{id}', 'UserController@destroy');
	Route::get('/dashboard/restore/{id}', 'UserController@restore');

//Code valideren
Route::post('/code', array('as' => 'code', 'uses' => 'CodeController@store'));