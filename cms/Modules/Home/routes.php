<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function () {
    Route::get('/', 'HomeController@home')->name('client.index');
    Route::post('/send-contact', 'HomeController@sendContact')->name('client.contact.store');
    Route::get('/{slug}', 'HomeController@postDetail')->name('client.postDetail');
    Route::get('language/{locale}', function ($locale) {
        if (!in_array($locale, ['vi', 'en'])) {
            abort(404);
        }
        session()->put('locale', $locale);
        return redirect()->back();
    });
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
    Route::get('/dat-tour/{id}', 'HomeController@bookingTour')->name('client.bookingTour');
    Route::post('/xem-lai/{id}', 'HomeController@addToCart')->name('client.addToCart');
    Route::post('/hoan-thanh/{id}', 'HomeController@storeBooking')->name('client.storeBooking');
    Route::get('/booking/thanh-cong', 'HomeController@successBooking')->name('client.successBooking');
});
