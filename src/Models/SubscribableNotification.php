<?php

namespace Guava\NotificationPresetsForLaravel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SubscribableNotification extends Model
{

    // (SN) subscribable_notifications_table: NON TENANT
    // ('id'), ('type'), ('notifiable_type'), ('channel'), ('default'),
    // '1', 'child_arrived', 'customer', 'email', 'ALLOW',
    // '2', 'child_arrived', 'customer', 'sms', 'DENY',
    // '3', 'course_purchased', 'member', 'email',  'ALLOW',
    // '1', 'child_arrived', 'customer', 'email', 'ALLOW',
    // '5', 'bukli_newsletter', 'user', 'email', 'DEFAULT',


    //
    // (UN) notification_prefercences_table (m-m):
    // ('id'), ('tenant_id'), ('notifiable_type'), ('notifiable_id'), ('subscribable_notification_id'), ('preference'), ('is_subscribed')
    // '1', 'KIDDUM_1', 'customer', '1', '1', DEFAULT, ALLOW                 [USER 1, KIDDUM]
    // '2', 'KIDDUM_1', 'customer', '1', '2', DEFAULT, DENY              [USER 1, KIDDUM]
    // '3', 'KIDDUM_1', 'member', '2', 3', ALLOW, ALLOW
    // '4', 'KIDDUM_1', 'member', '2','4', ALLOW, ALLOW,
    // '5', , 'customer', '3', '1', DEFAULT, ALLOW                [USER 1, GUAVA]
    // '6', 'GUAVA_2', 'customer', '3', '2', DEny, true                [USER 1, GUAVA]


    // notification_presets
    // ('id'), ('subscribable_notification_id'), ('tenant_id'), ('state_preference'), ('state'), ('editable_preference'), ('is_editable')
    // '1', '1', 'KIDDUM_1', DEFAULT, ALLOW, true
    // '2', '2', 'KIDDUM_1', 'DENY', DENY, false
    // '3', '1', 'GUAVA_2', 'ALLOW', false
    // '4', '2', 'GUAVA_2', 'DEFAULT', true
    // '4', '2', null, 'DEFAULT', true


//    VERSIONE 2
// notifications (eloquent or sushi)
// ('id'), ('type'), ('channel'), ('default')

// notification_preferneces
// ('id'), ('notification_type'), ('channel'), ('notifiable_type'), ('notifiable_id'), ('model_type'), ('model_id'), ('preference')
// IF NO ROW FOUND => use global/ organiation defualt
// IF FOUND -> use preference

// notification_presets
// ('id'), ('notification_type'), ('channel'), ('model_type'), ('model_id'), ('default_preference'), ('is_Editable')


    protected $fillable = [
        'type',
        'channel',
    ];

    protected $casts = [
        'state' => 'boolean',
    ];

    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

}
