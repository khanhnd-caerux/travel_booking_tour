<?php

namespace Cms\Modules\Admin\Jobs;

use Illuminate\Support\Facades\Mail;
use Cms\Modules\Admin\Mail\MailNotify;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $users;

    /**
     * Create a new job instance.
     *
     * @param $data
     */
    public function __construct($data, $users)
    {
        $this->data = $data;
        $this->users = $users;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->users as $user) {
            try {
                Mail::to($user->email)->send(new MailNotify($this->data));
            } catch (\Exception $e) {
                \Log::error('Failed to send email to ' . $user->email . ': ' . $e->getMessage());
                // Continue sending to other users even if one fails
            }
        }
    }
}
