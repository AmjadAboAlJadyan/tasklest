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

Route::get('/', 'TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','TaskController@destory');



 Route::post('edit/{id}','TaskController@edit');

 Route::post('edit/update/{id}','TaskController@update');
