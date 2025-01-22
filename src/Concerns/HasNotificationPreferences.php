<?php

namespace Guava\NotificationPresetsForLaravel\Concerns;

use Guava\NotificationPresetsForLaravel\Contracts\Subscribable;
use Guava\NotificationPresetsForLaravel\Models\NotificationPreference;
use Guava\NotificationPresetsForLaravel\Models\SubscribableNotification;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasNotificationPreferences
{
    public function initializeHasNotificationPreferences() {
        static::created(function() {
            $this->createDefaultNotificationPreferences();
        });
    }

    public function notificationPreferences(): MorphToMany {
        return $this->morphToMany(SubscribableNotification::class, 'subscribable');
    }
}
