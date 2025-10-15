<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Cms\Modules\Admin\Controllers',
    'middleware' => ['web'],
], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');

    Route::group([
        'prefix' => 'user',
        'middleware' => ['auth']
    ], function () {
        Route::get('/create', 'UserController@create')->name('admin.user.create');
        Route::get('/edit/{id}', 'UserController@edit')->name('admin.user.edit');
        Route::get('/list', 'UserController@list')->name('admin.user.list');
        Route::post('/store', 'UserController@store')->name('admin.user.store');
        Route::put('/update/{id}', 'UserController@update')->name('admin.user.update');
        Route::delete('/delete', 'UserController@delete')->name('admin.user.delete');
    });
    Route::group([
        'prefix' => 'setting',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'SettingController@list')->name('admin.setting.list');
        Route::get('/create', 'SettingController@create')->name('admin.setting.create');
        Route::get('/edit/{id}', 'SettingController@edit')->name('admin.setting.edit');
        Route::post('/update/{id}', 'SettingController@update')->name('admin.setting.update');
        Route::post('/store', 'SettingController@store')->name('admin.setting.store');
        Route::get('/delete/{id}', 'SettingController@delete')->name('admin.setting.delete');
    });
    Route::group([
        'prefix' => 'slider',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'SliderController@list')->name('admin.slider.list');
        Route::get('/create', 'SliderController@create')->name('admin.slider.create');
        Route::get('/edit/{id}', 'SliderController@edit')->name('admin.slider.edit');
        Route::post('/update/{id}', 'SliderController@update')->name('admin.slider.update');
        Route::post('/store', 'SliderController@store')->name('admin.slider.store');
        Route::get('/delete/{id}', 'SliderController@delete')->name('admin.slider.delete');
    });
    Route::group([
        'prefix' => 'post',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'PostController@list')->name('admin.post.list');
        Route::get('/create', 'PostController@create')->name('admin.post.create');
        Route::get('/edit/{id}', 'PostController@edit')->name('admin.post.edit');
        Route::post('/update/{id}', 'PostController@update')->name('admin.post.update');
        Route::post('/store', 'PostController@store')->name('admin.post.store');
        Route::get('/delete/{id}', 'PostController@delete')->name('admin.post.delete');
    });
    Route::group([
        'prefix' => 'tour',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'TourController@list')->name('admin.tour.list');
        Route::get('/create', 'TourController@create')->name('admin.tour.create');
        Route::get('/edit/{id}', 'TourController@edit')->name('admin.tour.edit');
        Route::post('/update/{id}', 'TourController@update')->name('admin.tour.update');
        Route::post('/store', 'TourController@store')->name('admin.tour.store');
        Route::get('/delete/{id}', 'TourController@delete')->name('admin.tour.delete');
    });
    Route::group([
        'prefix' => 'tour-detail',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'TourController@list_detail')->name('admin.tour_detail.list');
        Route::get('/create', 'TourController@create_detail')->name('admin.tour_detail.create');
        Route::get('/edit/{id}', 'TourController@edit_detail')->name('admin.tour_detail.edit');
        Route::post('/update/{id}', 'TourController@update_detail')->name('admin.tour_detail.update');
        Route::post('/store', 'TourController@store_detail')->name('admin.tour_detail.store');
        Route::get('/delete/{id}', 'TourController@delete_detail')->name('admin.tour_detail.delete');
    });
    Route::group([
        'prefix' => 'tour-price',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'TourController@list_price')->name('admin.tour_price.list');
        Route::get('/create', 'TourController@create_price')->name('admin.tour_price.create');
        Route::get('/edit/{id}', 'TourController@edit_price')->name('admin.tour_price.edit');
        Route::post('/update/{id}', 'TourController@update_price')->name('admin.tour_price.update');
        Route::post('/store', 'TourController@store_price')->name('admin.tour_price.store');
        Route::get('/delete/{id}', 'TourController@delete_price')->name('admin.tour_price.delete');
    });
    Route::group([
        'prefix' => 'contact',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'ContactController@list')->name('admin.contact.list');
        Route::get('/delete/{id}', 'ContactController@delete')->name('admin.contact.delete');
    });
    Route::group([
        'prefix' => 'order',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'OrderController@list')->name('admin.order.list');
        Route::get('/detail/{id}', 'OrderController@detail')->name('admin.order.detail');
        Route::post('/update/{id}', 'OrderController@update')->name('admin.order.update');
        Route::get('/delete/{id}', 'OrderController@delete')->name('admin.order.delete');
    });
});
