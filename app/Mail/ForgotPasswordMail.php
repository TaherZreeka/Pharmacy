<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // Store user data

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user; // Assign user data
    }

    /**
     * Build the email message.
     */
    public function build()
    {
        return $this->subject('Password Reset Request')
                    ->view('emails.forgot_password');// Make sure this view exists

    }
}
