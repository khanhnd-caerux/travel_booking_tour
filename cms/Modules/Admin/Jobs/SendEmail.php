<?php

namespace Cms\Modules\Admin\Jobs;

use Illuminate\Support\Facades\Mail;
use Cms\Modules\Admin\Mail\MailNotify;
use Cms\Modules\Admin\Services\MailService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $users;
    protected $mailService;

    /**
     * Create a new job instance.
     *
     * @param $data
     * @param $users
     */
    public function __construct($data, $users)
    {
        $this->data = $data;
        $this->users = $users;
        $this->mailService = new MailService();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $successCount = 0;
        $failCount = 0;
        
        foreach ($this->users as $user) {
            try {
                // Sử dụng MailService với fallback mechanism
                $result = $this->mailService->sendMailable($user->email, new MailNotify($this->data));
                
                if ($result['success']) {
                    $successCount++;
                    Log::info("Email sent successfully to {$user->email} using mailer: {$result['mailer']}");
                } else {
                    $failCount++;
                    Log::error("Failed to send email to {$user->email}", [
                        'error' => $result['error'],
                        'tried_all_mailers' => true
                    ]);
                }
            } catch (\Exception $e) {
                $failCount++;
                Log::error('Exception while sending email to ' . $user->email, [
                    'error' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString()
                ]);
            }
        }
        
        // Log tổng kết
        Log::info("SendEmail job completed", [
            'total_users' => count($this->users),
            'success_count' => $successCount,
            'fail_count' => $failCount
        ]);
    }
}
