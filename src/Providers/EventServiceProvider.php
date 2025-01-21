<?php

namespace Guava\NotificationPresetsForLaravel\Providers;

use Guava\NotificationPresetsForLaravel\Listeners\VerifyNotificationPreset;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Notifications\Events\NotificationSending;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        NotificationSending::class => [
            VerifyNotificationPreset::class,
        ],
    ];

    public function boot(): void
    {
        parent::boot();
    }
}
