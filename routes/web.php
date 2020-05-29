<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home.index');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home/welcome', 'HomeController@welcome')->name('home.welcome');
});

