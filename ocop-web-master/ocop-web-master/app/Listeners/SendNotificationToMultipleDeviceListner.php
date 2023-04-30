<?php

namespace App\Listeners;

use App\Events\SendNotificationToMultipleDevice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Repositories\Contracts\PushNotificationInterface;
use App\Repositories\Eloquents\PushNotificationRepository;

class SendNotificationToMultipleDeviceListner
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
     * @param  \App\Events\SendNotificationToMultipleDevice  $event
     * @return void
     */
    public function handle(SendNotificationToMultipleDevice $event)
    {
        $to = $event->to;
        $title = $event->title;
        $body = $event->body;
        $message = $event->message;
        $type = $event->type;
        $this->pushNotificationRepository->pushNotificationToMultipleDevice($to,$title,$body,$message,$type);
    }
}
