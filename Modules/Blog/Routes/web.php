<?php
use Illuminate\Support\Facades\Route;

Route::get('/blog/list', 'BlogController@list')->name('admin.blog.list');
Route::get('/blog/create', 'BlogController@create')->name('admin.blog.create');
Route::post('/blog/store', 'BlogController@store')->name('admin.blog.store');
Route::get('/blog/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
Route::post('/blog/edit/{id}', 'BlogController@update')->name('admin.blog.update');
Route::post('/blog/delete', 'BlogController@delete')->name('admin.blog.delete');
Route::post('/blog/settop', 'BlogController@setTop')->name('admin.blog.setTop');
Route::post('/blog/toggleShow', 'BlogController@toggleShow')->name('admin.blog.toggleShow');
////
Route::get('/blog_category/list', 'BlogCategoryController@list')->name('admin.blog_category.list');
Route::get('/blog_category/create', 'BlogCategoryController@create')->name('admin.blog_category.create');
Route::post('/blog_category/store', 'BlogCategoryController@store')->name('admin.blog_category.store');
Route::get('/blog_category/edit/{id}', 'BlogCategoryController@edit')->name('admin.blog_category.edit');
Route::post('/blog_category/edit/{id}', 'BlogCategoryController@update')->name('admin.blog_category.update');
Route::post('/blog_category/delete', 'BlogCategoryController@delete')->name('admin.blog_category.delete');
Route::post('/blog_category/settop', 'BlogCategoryController@setTop')->name('admin.blog_category.setTop');
Route::post('/blog_category/toggleShow', 'BlogCategoryController@toggleShow')->name('admin.blog_category.toggleShow');
/////
Route::get('/danh-muc-tin-tuc/{id}-{slug}', 'BlogHomeController@list')->name('home.blog_category.list');
Route::get('/tin-tuc/{id}-{slug}', 'BlogHomeController@detail')->name('home.blog_category.detail');