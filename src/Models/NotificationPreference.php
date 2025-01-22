<?php

namespace Guava\NotificationPresetsForLaravel\Models;

use Guava\NotificationPresetsForLaravel\Enums\NotificationState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class NotificationPreference extends Model
{

    // ('id'), ('notifiable_type'), ('notifiable_id'), ('subscribable_notification_id'), ('state'), ('current_state')
    protected $fillable = [
        'notifiable_type',
        'notifiable_id',
        'subscribable_notification_id',
        'state',
        'current_state',
    ];

    protected $casts = [
        'state' => NotificationState::class,
        'current_state' => NotificationState::class,
    ];

    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

}
