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
    $messages = DB::table('messages')->get();
    return view('index', compact('messages'));
});
Route::get('/message/{id}/edit', function () {
    return view('edit');
});
