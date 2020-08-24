<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::post('/resultado', 'HomeController@buscar')->name('buscar');
Route::post('/', 'HomeController@back')->name('back');

