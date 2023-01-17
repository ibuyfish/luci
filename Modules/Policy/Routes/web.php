<?php
use Illuminate\Support\Facades\Route;

Route::get('/policy/list', 'PolicyController@list')->name('admin.policy.list');
Route::get('/policy/create', 'PolicyController@create')->name('admin.policy.create');
Route::post('/policy/store', 'PolicyController@store')->name('admin.policy.store');
Route::get('/policy/edit/{id}', 'PolicyController@edit')->name('admin.policy.edit');
Route::post('/policy/edit/{id}', 'PolicyController@update')->name('admin.policy.update');
Route::post('/policy/delete', 'PolicyController@delete')->name('admin.policy.delete');
Route::post('/policy/settop', 'PolicyController@setTop')->name('admin.policy.setTop');
Route::post('/policy/toggleShow', 'PolicyController@toggleShow')->name('admin.policy.toggleShow');
/////
Route::get('/chinh-sach/{id}', 'PolicyHomeController@detail')->name('home.policy.detail');