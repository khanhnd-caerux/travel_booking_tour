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
        'prefix' => 'category',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'CategoryController@list')->name('admin.category.list');
        Route::get('/create', 'CategoryController@create')->name('admin.category.create');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('admin.category.update');
        Route::post('/store', 'CategoryController@store')->name('admin.category.store');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
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
        'prefix' => 'car',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'CarController@list')->name('admin.car.list');
        Route::get('/create', 'CarController@create')->name('admin.car.create');
        Route::get('/edit/{id}', 'CarController@edit')->name('admin.car.edit');
        Route::post('/update/{id}', 'CarController@update')->name('admin.car.update');
        Route::post('/store', 'CarController@store')->name('admin.car.store');
        Route::get('/delete/{id}', 'CarController@delete')->name('admin.car.delete');
    });
    Route::group([
        'prefix' => 'ticket',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'TicketController@list')->name('admin.ticket.list');
        Route::get('/create', 'TicketController@create')->name('admin.ticket.create');
        Route::get('/edit/{id}', 'TicketController@edit')->name('admin.ticket.edit');
        Route::post('/update/{id}', 'TicketController@update')->name('admin.ticket.update');
        Route::post('/store', 'TicketController@store')->name('admin.ticket.store');
        Route::get('/delete/{id}', 'TicketController@delete')->name('admin.ticket.delete');
    });
    Route::group([
        'prefix' => 'order',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'OrderController@list')->name('admin.order.list');
        Route::get('/detail/{id}', 'OrderController@detail')->name('admin.order.detail');
        Route::get('/delete/{id}', 'OrderController@delete')->name('admin.order.delete');
        Route::put('/update/order_detail', 'OrderController@update')->name('admin.order.update');
    });
    Route::group([
        'prefix' => 'contact',
        'middleware' => ['auth']
    ], function () {
        Route::get('/list', 'ContactController@list')->name('admin.contact.list');
        Route::get('/delete/{id}', 'ContactController@delete')->name('admin.contact.delete');
    });
});
