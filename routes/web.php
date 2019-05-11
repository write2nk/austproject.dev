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


Route::get('application', 'ApplicationController@create')->name('application.create');
Route::post('application', 'ApplicationController@store')->name('application.store');

Auth::routes();

Route::get('home', 'ApplicationController@create')->name('home');

