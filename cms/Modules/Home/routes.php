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
        return redirect()->route('client.index');
    });
    Route::get('/booking/success', 'HomeController@successBooking')->name('client.successBooking');
});
