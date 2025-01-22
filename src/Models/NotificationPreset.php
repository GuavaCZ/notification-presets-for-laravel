<?php

namespace Guava\NotificationPresetsForLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationPreset extends Model {

    protected $fillable = [
        //('id'), ('subscribable_notification_id'), ('tenant_id'), ('default'), ('is_editable'),
        'subscribable_notification_id',
        'preference',
        'state',
        'is_editable',
        'tenant_id',
    ];
}
