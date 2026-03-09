<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Test Mail Routes
Route::group([
    'namespace' => 'Cms\Modules\Admin\Controllers',
], function () {
    Route::get('/test-mail', 'TestMailController@testMail')->name('test.mail');
    Route::get('/test-mail-simple', 'TestMailController@testMailSimple')->name('test.mail.simple');
});


// Push Notification API Routes (using web middleware for CSRF protection)
Route::group([
    'prefix' => 'api',
    'namespace' => 'Cms\Modules\Admin\Controllers',
    'middleware' => ['web'],
], function () {
    Route::get('/check-notification', 'NotificationController@checkNotification');
    Route::get('/push-notification/vapid-key', 'PushNotificationController@getVapidKey');
    Route::post('/push-notification/subscribe', 'PushNotificationController@subscribe');
    Route::post('/push-notification/unsubscribe', 'PushNotificationController@unsubscribe');
});
