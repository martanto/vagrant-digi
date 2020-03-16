<?php

Route::get('/','DigiController@index')
    ->name('index');

Route::resource('user', 'UserController');
Route::resource('role', 'roleController');
