<?php
use Illuminate\Support\Facades\Route;
    Route::get('/banner/list', 'BannerController@list')->name('admin.banner.list');
    Route::get('/banner/create', 'BannerController@create')->name('admin.banner.create');
    Route::post('/banner/store', 'BannerController@store')->name('admin.banner.store');
    Route::get('/banner/edit/{id}', 'BannerController@edit')->name('admin.banner.edit');
    Route::post('/banner/edit/{id}', 'BannerController@update')->name('admin.banner.update');
    Route::post('/banner/delete', 'BannerController@delete')->name('admin.banner.delete');
    Route::post('/banner/settop', 'BannerController@setTop')->name('admin.banner.setTop');
    Route::post('/banner/toggleShow', 'BannerController@toggleShow')->name('admin.banner.toggleShow');
