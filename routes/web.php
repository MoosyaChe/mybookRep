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

Route::get('/', 'MessagesController@index');
Route::get('/messages/{id}/edit', 'MessagesController@edit');
Route::get('/create', 'MessagesController@create');
Route::post('/messages', 'MessagesController@store');
Route::patch('/messages/{id}', 'MessagesController@update');
