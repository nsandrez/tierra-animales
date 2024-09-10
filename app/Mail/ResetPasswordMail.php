<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $resetLink;

    public function __construct(User $user, $resetLink)
    {
        $this->user = $user;
        $this->resetLink = $resetLink;
    }


    public function build()
    {
        return $this->from('no-reply@example.com')
            ->subject('Restablecimiento de Contraseña')
            ->view('mail.password-email')
            ->with([
                'name' => $this->user->name,
                'resetLink' => $this->resetLink,
            ]);
    }
}
