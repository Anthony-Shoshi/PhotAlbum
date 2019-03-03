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

Route::get('/', 'albumController@index');
Route::get('/album', 'albumController@index');
Route::get('/album/create', 'albumController@create');
Route::post('/album/store', 'albumController@store');
Route::get('/album/show/{id}', 'albumController@show');
Route::get('/photo/create/{id}', 'photoController@create');
Route::post('/photo/store/{id}', 'photoController@store');
Route::get('/photo/{id}', 'photoController@show');
Route::delete('/photo/{id}', 'photoController@destroy');
