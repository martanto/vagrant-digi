<?php

use Illuminate\Support\Facades\Route;

Route::get('/','DigiController@index')
    ->name('index');

Route::resource('user', 'UserController');
Route::resource('station', 'SeismicStationController');
Route::resource('role', 'roleController');
