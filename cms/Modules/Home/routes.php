<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function() {
    Route::get('/', 'HomeController@home')->name('client.index');
    Route::get('/{slug}', 'HomeController@postDetail')->name('client.postDetail');

    Route::group([
        'prefix' => 'tour',
        'middleware' => ['web']
    ], function () {
        Route::get('/{slug}', 'HomeController@tourList')->name('client.tourList');
    });
    Route::group([
        'prefix' => 'tour-detail',
        'middleware' => ['web']
    ], function () {
        Route::get('/{slug}', 'HomeController@tourDetail')->name('client.tourDetail');
    });
});
