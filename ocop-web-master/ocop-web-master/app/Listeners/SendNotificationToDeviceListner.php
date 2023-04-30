<?php

namespace App\Listeners;

use App\Events\SendNotificationToDevice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Repositories\Contracts\PushNotificationInterface;
use App\Repositories\Eloquents\PushNotificationRepository;

class SendNotificationToDeviceListner implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $pushNotificationRepository;

    public function __construct(PushNotificationInterface $pushNotificationRepository)
    {
        $this->pushNotificationRepository = $pushNotificationRepository;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendNotificationToDevice  $event
     * @return void
     */
    public function handle(SendNotificationToDevice $event)
    {
        $to = $event->to;
        $title = $event->title;
        $body = $event->body;
        $message = $event->message;
        $type = $event->type;
        $this->pushNotificationRepository->pushNotificationToDevice($to,$title,$body,$message,$type);
    }
}
