![notification-presets-for-laravel Banner](docs/images/banner.jpg)


# Adds ability to manage notification presets for any model.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/guava/notification-presets-for-laravel.svg?style=flat-square)](https://packagist.org/packages/guava/notification-presets-for-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/guavaCZ/notification-presets-for-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/guavaCZ/notification-presets-for-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/guavaCZ/notification-presets-for-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/guavaCZ/notification-presets-for-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/guava/notification-presets-for-laravel.svg?style=flat-square)](https://packagist.org/packages/guava/notification-presets-for-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Showcase

This is where your screenshots and videos should go. Remember to add them, so people see what your plugin does.

## Support us

Your support is key to the continual advancement of our plugin. We appreciate every user who has contributed to our journey so far.

While our plugin is available for all to use, if you are utilizing it for commercial purposes and believe it adds significant value to your business, we kindly ask you to consider supporting us through GitHub Sponsors. This sponsorship will assist us in continuous development and maintenance to keep our plugin robust and up-to-date. Any amount you contribute will greatly help towards reaching our goals. Join us in making this plugin even better and driving further innovation.

## Installation

You can install the package via composer:

```bash
composer require guava/notification-presets-for-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="notification-presets-for-laravel-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="notification-presets-for-laravel-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="notification-presets-for-laravel-views"
```

## Usage

```php
$notificationPresetsForLaravel = new Guava\NotificationPresetsForLaravel();
echo $notificationPresetsForLaravel->echoPhrase('Hello, Guava!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lukas Frey](https://github.com/lukas-frey)
- [Stepan Mocjak](https://github.com/uolsen
- [All Contributors](../../contributors)
- Spatie - Our package skeleton is a modified version of [Spatie's Package Skeleton](https://github.com/spatie/package-skeleton-laravel)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
