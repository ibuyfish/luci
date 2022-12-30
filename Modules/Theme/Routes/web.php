<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('/theme_category/list', 'ThemeCategoryController@list')->name('admin.theme_category.list');
    Route::get('/theme_category/create', 'ThemeCategoryController@create')->name('admin.theme_category.create');
    Route::post('/theme_category/store', 'ThemeCategoryController@store')->name('admin.theme_category.store');
    Route::get('/theme_category/edit/{id}', 'ThemeCategoryController@edit')->name('admin.theme_category.edit');
    Route::post('/theme_category/edit/{id}', 'ThemeCategoryController@update')->name('admin.theme_category.update');
    Route::post('/theme_category/delete', 'ThemeCategoryController@delete')->name('admin.theme_category.delete');
    Route::post('/theme_category/settop', 'ThemeCategoryController@setTop')->name('admin.theme_category.setTop');
    Route::post('/theme_category/toggleShow', 'ThemeCategoryController@toggleShow')->name('admin.theme_category.toggleShow');
    ////////////
    Route::get('/theme_product/list', 'ThemeProductController@list')->name('admin.theme_product.list');
    Route::get('/theme_product/create', 'ThemeProductController@create')->name('admin.theme_product.create');
    Route::post('/theme_product/store', 'ThemeProductController@store')->name('admin.theme_product.store');
    Route::get('/theme_product/edit/{id}', 'ThemeProductController@edit')->name('admin.theme_product.edit');
    Route::post('/theme_product/edit/{id}', 'ThemeProductController@update')->name('admin.theme_product.update');
    Route::post('/theme_product/delete', 'ThemeProductController@delete')->name('admin.theme_product.delete');
    Route::post('/theme_product/settop', 'ThemeProductController@setTop')->name('admin.theme_product.setTop');
    Route::post('/theme_product/toggleShow', 'ThemeProductController@toggleShow')->name('admin.theme_product.toggleShow');
    ////////////
    Route::get('/theme_blog/list', 'ThemeBlogController@list')->name('admin.theme_blog.list');
    Route::get('/theme_blog/create', 'ThemeBlogController@create')->name('admin.theme_blog.create');
    Route::post('/theme_blog/store', 'ThemeBlogController@store')->name('admin.theme_blog.store');
    Route::get('/theme_blog/edit/{id}', 'ThemeBlogController@edit')->name('admin.theme_blog.edit');
    Route::post('/theme_blog/edit/{id}', 'ThemeBlogController@update')->name('admin.theme_blog.update');
    Route::post('/theme_blog/delete', 'ThemeBlogController@delete')->name('admin.theme_blog.delete');
    Route::post('/theme_blog/settop', 'ThemeBlogController@setTop')->name('admin.theme_blog.setTop');
    Route::post('/theme_blog/toggleShow', 'ThemeBlogController@toggleShow')->name('admin.theme_blog.toggleShow');
});
    Route::get('/theme/home', 'ThemeController@index')->name('theme.home');
    Route::get('/theme/register', 'ThemeController@showRegister')->name('theme.showRegister');
    Route::post('/theme/register', 'ThemeController@register')->name('theme.register');
    Route::get('/theme/product/{id}-{slug}', 'ThemeController@showDetail')->name('theme.detail');
    Route::post('/theme/addcart', 'ThemeController@addCart')->name('theme.addCart');
    Route::post('/theme/removeCart', 'ThemeController@removeCart')->name('theme.removeCart');
    Route::get('/theme/user/verify/{id}/{token}', 'ThemeController@userVerify')->name('theme.userVerify');
