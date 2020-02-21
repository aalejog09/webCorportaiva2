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

Route::get('/','webCorporateController@index');
Route::get('/home','webCorporateController@index');
Route::get('/kit','webCorporateController@kitAdn');
Route::get('/contacto','webCorporateController@contacto');
Route::get('/consultas','webCorporateController@consultasGratuitas');
Route::get('/promociones','webCorporateController@promociones');





