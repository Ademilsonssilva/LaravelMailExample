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

Route::get('mail1', 'EmailController@mail1')->name('mail1');
Route::get('mail2', 'EmailController@mail2')->name('mail2');
Route::get('envteste', 'EmailController@envteste')->name('envteste');
Route::match(['get', 'post'], 'translate', 'FormController@translate')->name('translate');

Route::get('/home', 'HomeController@index')->name('home');
