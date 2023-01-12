<?php
use Illuminate\Support\Facades\Route;
////// Dashboard Route
Route::get('/solution/list', 'SolutionController@list')->name('admin.solution.list');
Route::get('/solution/create', 'SolutionController@create')->name('admin.solution.create');
Route::post('/solution/store', 'SolutionController@store')->name('admin.solution.store');
Route::get('/solution/edit/{id}', 'SolutionController@edit')->name('admin.solution.edit');
Route::post('/solution/edit/{id}', 'SolutionController@update')->name('admin.solution.update');
Route::post('/solution/delete', 'SolutionController@delete')->name('admin.solution.delete');
Route::post('/solution/settop', 'SolutionController@setTop')->name('admin.solution.setTop');
Route::post('/solution/toggleShow', 'SolutionController@toggleShow')->name('admin.solution.toggleShow');
////// Home Route
Route::get('/giai-phap/{id}', 'SolutionHomeController@detail')->name('home.solution.detail');