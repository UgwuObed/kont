<?php

Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
namespace App\Mail;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.verify')->with([
            'user' => $this->user,
            'verify_url' => url("/email/verify/{$this->user->id}/" . urlencode($this->user->email_verification_token)),
        ]);
    }
}