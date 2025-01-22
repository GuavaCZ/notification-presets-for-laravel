<?php

namespace Guava\NotificationPresetsForLaravel\Enums;

enum NotificationState: string
{
    case Allow = 'allow';
    case Deny = 'deny';
    case Default = 'default';
}
