<?php

namespace Cms\Modules\Home\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = 'Yêu cầu liên hệ từ ' . $this->contactData['full_name'];

        return $this->subject($subject)
                    ->view('Home::mails.contact-notification')
                    ->with('data', $this->contactData);
    }
}
