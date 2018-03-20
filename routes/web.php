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

Route::get('/','StaticpagesController@home')->name('home');
Route::get('/help','StaticpagesController@help')->name('help');
Route::get('/about','StaticpagesController@about')->name('about');


Route::get('signup','UsersController@created')->name('signup');


Route::resource('users','UsersController');