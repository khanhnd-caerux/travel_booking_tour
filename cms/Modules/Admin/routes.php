<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Cms\Modules\Admin\Controllers',
    'middleware' => ['web'],
], function() {
    Route::get('/', 'HomeController@index')->name('admin.index');

    Route::group(['prefix' => 'user'], function() {
        Route::get('/create', 'UserController@create')->name('admin.user.create');
        Route::post('/store', 'UserController@store')->name('admin.user.store');
    });
});
