<?php

namespace Guava\NotificationPresetsForLaravel\Listeners;

use Illuminate\Notifications\Events\NotificationSending;

class VerifyNotificationPreset
{

    public function handle(NotificationSending $event): bool {
        // TODO: Check if the notification should be sent.
        return true;
    }

}
