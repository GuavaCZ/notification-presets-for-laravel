<?php

namespace Guava\NotificationPresetsForLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Guava\NotificationPresetsForLaravel\NotificationPresetsForLaravel
 */
class NotificationPresetsForLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Guava\NotificationPresetsForLaravel\NotificationPresetsForLaravel::class;
    }
}
