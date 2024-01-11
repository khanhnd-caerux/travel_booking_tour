<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function() {
    Route::get('/', 'HomeController@home')->name('home.home');

    Route::group([
        'middleware' => ['auth', 'cms.verified']
    ], function () {
        Route::get('/home', 'HomeController@index')->name('home.index');
    });
});
