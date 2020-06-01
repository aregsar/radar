<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home.index');

Illuminate\Support\Facades\Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@welcome')->name('home.welcome');

    Route::get('/demo/email', 'Demo\Email')->name('demo.email');
});

