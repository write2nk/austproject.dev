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

Route::get('application', 'ApplicationController@index')->name('application.index');
Route::get('application/create', 'ApplicationController@create')->name('application.create');
Route::get('application/{application}', 'ApplicationController@show')->name('application.show');
Route::patch('application/{application}', 'ApplicationController@update')->name('application.update');
Route::post('application', 'ApplicationController@store')->name('application.store');

Route::get('submission/{application}', 'SubmissionController@show')->name('submission.show');

Auth::routes();

Route::get('home', 'ApplicationController@index')->name('home');

