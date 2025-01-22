<?php

namespace Guava\NotificationPresetsForLaravel\Notifications;

use Guava\NotificationPresetsForLaravel\Contracts\Subscribable;

abstract class SubscribableNotification implements Subscribable
{
    public function via() {
        // TODO: implement basic via method
    }
}
