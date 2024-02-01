<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function() {
    Route::get('/', 'HomeController@home')->name('client.index');
    Route::post('/send-contact', 'HomeController@sendContact')->name('client.contact.store');
    Route::get('/{slug}', 'HomeController@postDetail')->name('client.postDetail');

    Route::group([
        'prefix' => 'noi-dung',
        'middleware' => ['web']
    ], function () {
        Route::get('/{slug}', 'HomeController@contentList')->name('client.contentList');
    });
    Route::group([
        'prefix' => 'noi-dung-chi-tiet',
        'middleware' => ['web']
    ], function () {
        Route::get('/{slug}', 'HomeController@contentDetail')->name('client.contentDetail');
    });
});
