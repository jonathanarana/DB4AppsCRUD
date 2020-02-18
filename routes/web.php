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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/registro', 'HomeController@registro');
Route::post('/registro', 'HomeController@newregistro');

Route::get('/lista', 'HomeController@lista');

Route::get('/editar/{id}', 'HomeController@editar');
Route::post('/editar/{id}', 'HomeController@update');




Route::get('/materia', 'HomeController@nmateria');
Route::post('/materia', 'HomeController@newmateria');

Route::get('/lmateria', 'HomeController@lmateria');

Route::get('/editarm/{id}', 'HomeController@editarm');
Route::post('/editarm/{id}', 'HomeController@updatem');




Route::get('/inscribir/{id}', 'HomeController@inscribir');
Route::post('/inscribir/{id}', 'HomeController@inscribirse');



Route::get('/calificar/{id}', 'HomeController@calificar');
Route::post('/calificar/{id}', 'HomeController@calificarse');


Route::get('/relacion/{id}', 'HomeController@relacion');


Route::get('/calificaciones/{id}', 'HomeController@calificaciones');
