<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'FrontController@index');
Route::get('/menu', 'FrontController@menu');
Route::get('/registro', 'FrontController@registro');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('book', 'BookController');

Route::resource('universitario', 'UniversitarioController');