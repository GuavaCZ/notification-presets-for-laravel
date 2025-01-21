<?php

namespace Guava\NotificationPresetsForLaravel\Contracts;

interface Subscribable
{
    public function id(): string;

    public function name(): string;

    public function subscribableChannels(): array;

    public function defaultSubscriptionPreferences(): array;
}
