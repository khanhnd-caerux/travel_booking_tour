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

// Test Mail Route
Route::get('/test-mail', function () {
    try {
        $toEmail = config('mail.from.address', 'test@example.com');
        
        Mail::raw('Test email từ Travel Booking Tour. Thời gian: ' . now(), function ($message) use ($toEmail) {
            $message->to($toEmail)->subject('Test Email - ' . config('app.name'));
        });

        return response()->json([
            'success' => true,
            'message' => 'Email đã gửi thành công đến: ' . $toEmail,
            'config' => [
                'driver' => config('mail.default'),
                'host' => config('mail.mailers.smtp.host'),
                'port' => config('mail.mailers.smtp.port'),
                'from' => config('mail.from.address'),
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'config' => [
                'driver' => config('mail.default'),
                'host' => config('mail.mailers.smtp.host'),
                'port' => config('mail.mailers.smtp.port'),
                'from' => config('mail.from.address'),
            ]
        ], 500);
    }
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
