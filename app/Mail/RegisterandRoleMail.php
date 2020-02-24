<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterandRoleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $role;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user , $role)
    {
        $role = $this->role;
        $user = $this->user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.role');
    }
}
