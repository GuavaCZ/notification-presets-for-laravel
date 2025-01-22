<?php

namespace Guava\NotificationPresetsForLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotificationPreferencesServiceProvider extends PackageServiceProvider
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
}
