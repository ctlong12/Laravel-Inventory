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

Route::get('/', 'AssetsController@index');

Route::resource('assets', 'AssetsController');
Route::resource('person', 'PersonController');
Route::resource('owner', 'OwnerController');


Auth::routes();

Route::get('/assets', 'AssetsController@index');
