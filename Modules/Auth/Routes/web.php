<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('/login', 'AuthController@showLogin');
    Route::post('/login','AuthController@login')->name('admin.login');
});
