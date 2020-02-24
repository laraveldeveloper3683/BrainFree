<?php

namespace App\Listeners;

use App\Events\AssignRole;
use App\Mail\RegisterandRoleMail;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class AssignRoleConfirmation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AssignRole  $event
     * @return void
     */
    public function handle(AssignRole $event)
    {

        $data = [
            'name' => $event->user->name,
            'email' => $event->user->email,
            'token' => $event->user->token,
            'role' => $event->role,
        ];
        Mail::send('mails.role', $data , function($message) use ($data) {
            $message->to($data['email'])
                ->subject('Your Account Info');
        });
    }
}
