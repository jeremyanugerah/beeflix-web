<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MovieController@indexHome');
Route::get('watch/{id}', 'MovieController@indexWatch');
Route::get('genre/{id}', 'MovieController@indexGenre');
Route::get('/all', 'MovieController@indexAll');