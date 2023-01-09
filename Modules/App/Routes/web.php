<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', 'AppController@showDashboard')->name('admin.dashboard.show')->middleware('dashboard');
});
Route::get('/', 'AppHomeController@index')->name('home');

Route::get('/set-locale-en', 'AppController@localeEn')->name('admin.locale.en')->middleware('locale');
Route::get('/set-locale-vi', 'AppController@localeVi')->name('admin.locale.vi')->middleware('locale');