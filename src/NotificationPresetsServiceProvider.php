<?php

namespace Guava\NotificationPresetsForLaravel;

use Guava\NotificationPresetsForLaravel\Commands\NotificationPresetsForLaravelCommand;
use Guava\NotificationPresetsForLaravel\Providers\EventServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotificationPresetsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('notification-presets')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_notification-presets-for-laravel_table')
        ;
    }

    public function registeringPackage(): void
    {
        $this->app->register(EventServiceProvider::class);
    }
}
