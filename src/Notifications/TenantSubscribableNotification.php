<?php

namespace Guava\NotificationPresetsForLaravel\Notifications;

use Guava\NotificationPresetsForLaravel\Contracts\Subscribable;

abstract class TenantSubscribableNotification implements Subscribable
{
    public function via() {
        // TODO: implement tenant-compatible via method
    }
}
