<?php

namespace Guava\NotificationPresetsForLaravel\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

interface CanSubscribeToNotifications {

    public function notificationPreferences(): MorphToMany;
}
