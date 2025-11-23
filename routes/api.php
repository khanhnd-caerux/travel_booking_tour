<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

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
