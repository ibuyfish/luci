<?php 

use Illuminate\Support\Facades\Route;

Route::get('/tuyen-dung', 'RecruitHomeController@detail')->name('home.recruit.detail');
