<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\Factory as Queue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AssignRole implements \Illuminate\Contracts\Mail\Mailable
{
    use Dispatchable, SerializesModels;

    public $role;
    public $user;

    /**
     * Create a new event instance.
     *
     * @param $user
     * @param $role
     */
    public function __construct($user , $role)
    {
        $this->user = $user;
        $this->role = $role;
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    /**
     * @inheritDoc
     */
    public function send (Mailer $mailer)
    {
        // TODO: Implement send() method.
    }

    /**
     * @inheritDoc
     */
    public function queue (Queue $queue)
    {
        // TODO: Implement queue() method.
    }

    /**
     * @inheritDoc
     */
    public function later ($delay, Queue $queue)
    {
        // TODO: Implement later() method.
    }
}
