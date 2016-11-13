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

Route::get('/', 'CardController@index');
Route::get('card/{card}', 'CardController@show');
Route::post('card', 'CardController@store');
Route::post('card/{card}/note', 'NotesController@store');
