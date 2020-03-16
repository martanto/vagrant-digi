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
    return view('welcome');
})->name('home');

Route::get('login','LoginController@index')
    ->name('login')
    ->middleware('guest');
Route::post('login','LoginController@login')
    ->middleware('guest');

Route::post('logout','LoginController@logout')
    ->name('logout')
    ->middleware('auth');

Route::get('signup','LoginController@create')
    ->name('signup')
    ->middleware('guest');
Route::post('signup','LoginController@store')
    ->middleware('guest');
