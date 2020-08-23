<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@buscar')->name('buscar');
Route::post('/resultado', 'HomeController@resultado')->name('resultado');

