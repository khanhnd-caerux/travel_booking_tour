<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function () {
    Route::get('/', 'HomeController@home')->name('client.index');
    Route::post('/confirm-order', 'HomeController@confirmOrder')->name('client.confirmOrder');
    Route::post('/save-order', 'HomeController@saveOrder')->name('client.saveOrder');
    Route::post('/send-contact', 'HomeController@sendContact')->name('client.contact.store');
    Route::get('/{slug}', 'HomeController@postDetail')->name('client.postDetail');
    Route::get('language/{locale}', function ($locale) {
        if (!in_array($locale, ['vi', 'en'])) {
            abort(404);
        }
        session()->put('locale', $locale);
        return redirect()->route('client.index');
    });
    Route::get('/contact/contact-form', 'HomeController@contactPage')->name('client.contact');
    Route::get('/booking/success', 'HomeController@successBooking')->name('client.successBooking');
    Route::post('/ajax-get-prices-tour', 'HomeController@getPricesTour');
    Route::post('/ajax-count-prices-tour', 'HomeController@countPricesTour');
    
    // Push Notification Routes (public)
    Route::post('/push-notification/subscribe', 'HomeController@subscribePush')->name('client.push.subscribe');
    Route::post('/push-notification/unsubscribe', 'HomeController@unsubscribePush')->name('client.push.unsubscribe');
});
