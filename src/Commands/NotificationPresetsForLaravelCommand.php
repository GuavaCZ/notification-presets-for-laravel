<?php

namespace Guava\NotificationPresetsForLaravel\Commands;

use Illuminate\Console\Command;

class NotificationPresetsForLaravelCommand extends Command
{
    public $signature = 'notification-presets-for-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
