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


Route::get('/', 'ApiTestController@index');
Route::resource('test', 'ApiTestController');

Auth::routes();

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('login.github');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback')->name('login.github2');

