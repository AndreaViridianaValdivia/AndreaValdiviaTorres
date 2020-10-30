<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "cache limpio";
})->name('cache');



Auth::routes();

Route::resource('users', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');
