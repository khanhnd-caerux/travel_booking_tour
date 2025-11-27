<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function testMail()
    {
        try {
            $toEmail = config('mail.from.address', 'test@example.com');
            
            Mail::raw('Đây là email test từ hệ thống Travel Booking Tour. Thời gian: ' . now(), function ($message) use ($toEmail) {
                $message->to($toEmail)
                        ->subject('Test Email - ' . config('app.name'));
            });

            return response()->json([
                'success' => true,
                'message' => 'Email đã được gửi thành công đến: ' . $toEmail,
                'mail_config' => [
                    'driver' => config('mail.default'),
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                    'from' => config('mail.from.address'),
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi gửi email',
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'mail_config' => [
                    'driver' => config('mail.default'),
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                    'from' => config('mail.from.address'),
                ]
            ], 500);
        }
    }
}

