<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function testMail()
    {
        try {
            // Tăng timeout và memory limit
            set_time_limit(120); // 2 phút
            ini_set('max_execution_time', 120);
            
            $toEmail = config('mail.from.address', 'test@example.com');
            $results = [];
            $currentMailer = config('mail.default', 'smtp');
            
            // Lấy tất cả mailers có sẵn
            $mailersToTest = [];
            
            // Test mailer hiện tại
            if ($currentMailer) {
                $mailersToTest[] = $currentMailer;
            }
            
            // Nếu đang dùng smtp, thử các tùy chọn khác
            if ($currentMailer === 'smtp') {
                $mailersToTest[] = 'smtp_ssl'; // Port 465 với SSL
                $mailersToTest[] = 'smtp_tls'; // Port 587 với TLS
                $mailersToTest[] = 'sendmail'; // Fallback
            }
            
            // Loại bỏ duplicate và null
            $mailersToTest = array_filter(array_unique($mailersToTest));
            
            // Giới hạn số lượng mailer test để tránh timeout
            $mailersToTest = array_slice($mailersToTest, 0, 4);
            
            foreach ($mailersToTest as $mailer) {
                try {
                    // Kiểm tra mailer có tồn tại không
                    $mailerConfig = config("mail.mailers.{$mailer}", null);
                    if (!$mailerConfig) {
                        $results[$mailer] = [
                            'success' => false,
                            'error' => "Mailer '{$mailer}' không tồn tại trong config",
                            'error_type' => 'ConfigurationError',
                            'config' => [],
                        ];
                        continue;
                    }
                    
                    // Set timeout ngắn hơn cho mỗi mailer (30 giây)
                    $startTime = microtime(true);
                    
                    // Set mailer tạm thời
                    config(['mail.default' => $mailer]);
                    
                    // Thử gửi email với timeout
                    Mail::mailer($mailer)->raw('Test email từ Travel Booking Tour. Thời gian: ' . now() . "\n\nMailer: " . $mailer, function ($message) use ($toEmail, $mailer) {
                        $message->to($toEmail)->subject('Test Email - ' . config('app.name', 'Laravel') . ' [' . $mailer . ']');
                    });
                    
                    $duration = round((microtime(true) - $startTime) * 1000, 2);
                    
                    $results[$mailer] = [
                        'success' => true,
                        'message' => 'Email đã gửi thành công với mailer: ' . $mailer,
                        'duration_ms' => $duration,
                    ];
                    
                    // Nếu thành công với mailer này, dừng lại
                    break;
                    
                } catch (\Exception $e) {
                    $mailerConfig = config("mail.mailers.{$mailer}", []);
                    
                    $results[$mailer] = [
                        'success' => false,
                        'error' => $e->getMessage(),
                        'error_type' => get_class($e),
                        'config' => [
                            'transport' => $mailerConfig['transport'] ?? 'N/A',
                            'host' => $mailerConfig['host'] ?? 'N/A',
                            'port' => $mailerConfig['port'] ?? 'N/A',
                            'encryption' => $mailerConfig['encryption'] ?? 'N/A',
                            'username' => $mailerConfig['username'] ?? 'N/A',
                        ],
                    ];
                    
                    // Nếu là timeout, không thử mailer tiếp theo ngay
                    if (strpos(strtolower($e->getMessage()), 'timeout') !== false) {
                        // Tiếp tục thử mailer tiếp theo
                        continue;
                    }
                }
            }
            
            // Khôi phục mailer mặc định
            config(['mail.default' => $currentMailer]);
            
            // Tìm mailer thành công đầu tiên
            $successMailer = null;
            foreach ($results as $mailer => $result) {
                if (isset($result['success']) && $result['success']) {
                    $successMailer = $mailer;
                    break;
                }
            }
            
            return response()->json([
                'overall_success' => $successMailer !== null,
                'recommended_mailer' => $successMailer ?: 'Không có mailer nào hoạt động',
                'current_config' => [
                    'default_mailer' => $currentMailer,
                    'from_address' => config('mail.from.address'),
                    'from_name' => config('mail.from.name'),
                ],
                'test_results' => $results,
                'suggestions' => $this->getMailSuggestions($results),
            ], $successMailer ? 200 : 500);
            
        } catch (\Exception $e) {
            // Bắt mọi lỗi để tránh 503
            return response()->json([
                'overall_success' => false,
                'error' => 'Lỗi khi test email: ' . $e->getMessage(),
                'error_type' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'suggestions' => [
                    'Kiểm tra cấu hình .env',
                    'Kiểm tra PHP extensions (openssl, sockets)',
                    'Xem logs: storage/logs/laravel.log'
                ]
            ], 500);
        }
    }

    public function testMailSimple()
    {
        try {
            $toEmail = config('mail.from.address', 'test@example.com');
            $mailer = config('mail.default', 'smtp');
            
            Mail::raw('Test email đơn giản. Thời gian: ' . now(), function ($message) use ($toEmail) {
                $message->to($toEmail)->subject('Test Email Simple');
            });
            
            return response()->json([
                'success' => true,
                'message' => 'Email đã gửi thành công',
                'mailer' => $mailer,
                'to' => $toEmail
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'error_type' => get_class($e),
                'config' => [
                    'mailer' => config('mail.default'),
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                ]
            ], 500);
        }
    }

    private function getMailSuggestions($results)
    {
        $suggestions = [];
        
        if (!is_array($results) || empty($results)) {
            return ["Không có kết quả test nào. Kiểm tra cấu hình mail."];
        }
        
        foreach ($results as $mailer => $result) {
            // Kiểm tra an toàn
            if (!is_array($result) || !isset($result['success'])) {
                continue;
            }
            
            if (!$result['success']) {
                $error = isset($result['error']) ? strtolower($result['error']) : '';
                
                if (empty($error)) {
                    continue;
                }
                
                if (strpos($error, 'connection') !== false || strpos($error, 'timeout') !== false) {
                    if ($mailer === 'smtp' || $mailer === 'smtp_tls') {
                        $suggestions[] = "Port 587 có thể bị chặn. Thử dùng port 465 với SSL (smtp_ssl)";
                    }
                    if ($mailer === 'smtp_ssl') {
                        $suggestions[] = "Port 465 cũng bị chặn. Thử dùng sendmail hoặc liên hệ hosting để mở port";
                    }
                }
                
                if (strpos($error, 'authentication') !== false) {
                    $suggestions[] = "Kiểm tra lại MAIL_USERNAME và MAIL_PASSWORD trong .env";
                }
                
                if (strpos($error, 'ssl') !== false || strpos($error, 'certificate') !== false) {
                    $suggestions[] = "Vấn đề với SSL certificate. Thử set MAIL_VERIFY_PEER=false trong .env";
                }
            }
        }
        
        if (empty($suggestions)) {
            $suggestions[] = "Tất cả mailers đều thất bại. Kiểm tra cấu hình .env và liên hệ hosting";
        }
        
        return array_unique($suggestions);
    }
}


