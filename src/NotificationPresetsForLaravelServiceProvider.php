<?php

namespace Guava\NotificationPresetsForLaravel;

use Guava\NotificationPresetsForLaravel\Commands\NotificationPresetsForLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotificationPresetsForLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('notification-presets-for-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_notification-presets-for-laravel_table')
            ->hasCommand(NotificationPresetsForLaravelCommand::class)
        ;
    }
}
