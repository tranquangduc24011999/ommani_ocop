<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\SendNotificationToDevice;
use App\Listeners\SendNotificationToDeviceListner;

use App\Listeners\SendNotificationToMultipleDeviceListner;
use App\Events\SendNotificationToMultipleDevice;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendNotificationToDevice::class => [
            SendNotificationToDeviceListner::class,
        ],
        SendNotificationToMultipleDevice::class => [
            SendNotificationToMultipleDeviceListner::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
