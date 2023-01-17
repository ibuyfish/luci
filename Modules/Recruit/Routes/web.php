<?php 

use Illuminate\Support\Facades\Route;

    Route::get('/recruit/list', 'RecruitController@list')->name('admin.recruit.list');
    Route::get('/recruit/create', 'RecruitController@create')->name('admin.recruit.create');
    Route::post('/recruit/store', 'RecruitController@store')->name('admin.recruit.store');
    Route::get('/recruit/edit/{id}', 'RecruitController@edit')->name('admin.recruit.edit');
    Route::post('/recruit/edit/{id}', 'RecruitController@update')->name('admin.recruit.update');
    Route::post('/recruit/delete', 'RecruitController@delete')->name('admin.recruit.delete');
    Route::post('/recruit/settop', 'RecruitController@setTop')->name('admin.recruit.setTop');
    Route::post('/recruit/toggleShow', 'RecruitController@toggleShow')->name('admin.recruit.toggleShow');
    ////////
    Route::get('/recruit_applicant/list', 'RecruitApplicantController@list')->name('admin.recruit_applicant.list');
    Route::get('/recruit_applicant/create', 'RecruitApplicantController@create')->name('admin.recruit_applicant.create');
    Route::post('/recruit_applicant/store', 'RecruitApplicantController@store')->name('admin.recruit_applicant.store');
    Route::get('/recruit_applicant/edit/{id}', 'RecruitApplicantController@edit')->name('admin.recruit_applicant.edit');
    Route::post('/recruit_applicant/edit/{id}', 'RecruitApplicantController@update')->name('admin.recruit_applicant.update');
    Route::post('/recruit_applicant/delete', 'RecruitApplicantController@delete')->name('admin.recruit_applicant.delete');
    Route::post('/recruit_applicant/settop', 'RecruitApplicantController@setTop')->name('admin.recruit_applicant.setTop');
    Route::post('/recruit_applicant/toggleShow', 'RecruitApplicantController@toggleShow')->name('admin.recruit_applicant.toggleShow');
    ////////
    Route::get('/tuyen-dung', 'RecruitHomeController@detail')->name('home.recruit.detail');
    Route::post('/tuyen-dung', 'RecruitHomeController@storeApplicant')->name('home.recruit.storeApplicant');
