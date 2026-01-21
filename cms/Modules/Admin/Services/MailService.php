<?php

namespace Cms\Modules\Admin\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class MailService
{
    /**
     * Danh sách mailers để thử theo thứ tự ưu tiên
     */
    protected $mailerPriority = [
        'smtp',      // Mailer mặc định từ config
        'smtp_ssl',  // Port 465 với SSL (thường hoạt động tốt trên cPanel)
        'smtp_tls',  // Port 587 với TLS
        'sendmail',  // Fallback nếu SMTP bị chặn
    ];

    /**
     * Gửi email với fallback mechanism
     * 
     * @param string|array $to
     * @param \Illuminate\Mail\Mailable|string $mailable
     * @param array $data
     * @return array ['success' => bool, 'mailer' => string, 'error' => string|null]
     */
    public function sendWithFallback($to, $mailable, $data = [])
    {
        $lastError = null;
        
        // Lấy mailer mặc định từ config
        $defaultMailer = config('mail.default', 'smtp');
        
        // Thêm mailer mặc định vào đầu danh sách nếu chưa có
        if (!in_array($defaultMailer, $this->mailerPriority)) {
            array_unshift($this->mailerPriority, $defaultMailer);
        }
        
        foreach ($this->mailerPriority as $mailer) {
            try {
                // Kiểm tra mailer có tồn tại không
                if (!config("mail.mailers.{$mailer}")) {
                    continue;
                }
                
                // Gửi email với mailer này
                if (is_string($mailable)) {
                    // Nếu là string, dùng Mail::raw
                    Mail::mailer($mailer)->raw($mailable, function ($message) use ($to, $data) {
                        if (is_array($to)) {
                            $message->to($to);
                        } else {
                            $message->to($to);
                        }
                        
                        if (isset($data['subject'])) {
                            $message->subject($data['subject']);
                        }
                        
                        if (isset($data['from'])) {
                            $message->from($data['from'], $data['from_name'] ?? null);
                        }
                    });
                } else {
                    // Nếu là Mailable instance
                    Mail::mailer($mailer)->to($to)->send($mailable);
                }
                
                // Thành công
                Log::info("Email sent successfully using mailer: {$mailer}", [
                    'to' => is_array($to) ? implode(', ', $to) : $to,
                    'mailer' => $mailer
                ]);
                
                return [
                    'success' => true,
                    'mailer' => $mailer,
                    'error' => null
                ];
                
            } catch (Exception $e) {
                $lastError = $e->getMessage();
                
                Log::warning("Failed to send email with mailer: {$mailer}", [
                    'mailer' => $mailer,
                    'error' => $lastError,
                    'to' => is_array($to) ? implode(', ', $to) : $to,
                ]);
                
                // Tiếp tục thử mailer tiếp theo
                continue;
            }
        }
        
        // Tất cả mailers đều thất bại
        Log::error("All mailers failed to send email", [
            'to' => is_array($to) ? implode(', ', $to) : $to,
            'last_error' => $lastError,
            'tried_mailers' => $this->mailerPriority
        ]);
        
        return [
            'success' => false,
            'mailer' => null,
            'error' => $lastError
        ];
    }

    /**
     * Gửi email đơn giản (raw text)
     * 
     * @param string|array $to
     * @param string $subject
     * @param string $body
     * @return array
     */
    public function sendRaw($to, $subject, $body)
    {
        return $this->sendWithFallback($to, $body, [
            'subject' => $subject
        ]);
    }

    /**
     * Gửi email với Mailable class
     * 
     * @param string|array $to
     * @param \Illuminate\Mail\Mailable $mailable
     * @return array
     */
    public function sendMailable($to, $mailable)
    {
        return $this->sendWithFallback($to, $mailable);
    }
}



