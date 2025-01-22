<?php

namespace Guava\NotificationPresetsForLaravel\Concerns;

use Guava\NotificationPresetsForLaravel\Contracts\CanSubscribeToNotifications;
use Illuminate\Database\Eloquent\Builder;

trait IsSubscribable {

    public function via(CanSubscribeToNotifications $notifiable): array
    {
        return $notifiable
            ->subscribedNotifications()
            ->where('type', $this->type)
            ->wherePivot('real_state', 'ALLOW')
//            ->where(function(Builder $query) {
//                $query->where('is_editable', true)
//                    ->where('real_state', 'ALLOW')
//            })
//            ->pluck('channel')
//            ->whereHas('notification', function (Builder $query) {
//                $query->where('type', $this->type);
//            })
            ->pluck('channel')
            ->toArray();
    }

}
