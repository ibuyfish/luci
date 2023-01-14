<?php
use Illuminate\Support\Facades\Route;
////// Dashboard Route
Route::get('/service/list', 'ServiceController@list')->name('admin.service.list');
Route::get('/service/create', 'ServiceController@create')->name('admin.service.create');
Route::post('/service/store', 'ServiceController@store')->name('admin.service.store');
Route::get('/service/edit/{id}', 'ServiceController@edit')->name('admin.service.edit');
Route::post('/service/edit/{id}', 'ServiceController@update')->name('admin.service.update');
Route::post('/service/delete', 'ServiceController@delete')->name('admin.service.delete');
Route::post('/service/settop', 'ServiceController@setTop')->name('admin.service.setTop');
Route::post('/service/toggleShow', 'ServiceController@toggleShow')->name('admin.service.toggleShow');
////// Home Route
Route::get('/dich-vu', 'ServiceHomeController@detail')->name('home.service.detail');