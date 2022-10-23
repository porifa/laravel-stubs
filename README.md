
# The Laravel stubs according to Porifa's choice

[![Stable Version](https://img.shields.io/packagist/v/porifa/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/porifa/laravel-stubs)
[![GitHub Tests Action Status](<https://img.shields.io/github/workflow/status/porifa/laravel-stubs/tests?label=Tests%20(Pest)>)](https://github.com/porifa/laravel-stubs/actions?query=workflow%3Apest+branch%3Amain)
[![GitHub Code Style Action Status](<https://img.shields.io/github/workflow/status/porifa/laravel-stubs/pint?label=Code%20Style%20(Pint)>)](https://github.com/porifa/laravel-stubs/actions?query=workflow%3A"pint"+branch%3Amain)
[![Quality Score](https://img.shields.io/scrutinizer/g/porifa/laravel-stubs.svg?style=flat-square)](https://scrutinizer-ci.com/g/porifa/laravel-stubs)
[![Downloads](https://img.shields.io/packagist/dt/porifa/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/porifa/laravel-stubs)
[![License](https://img.shields.io/packagist/l/porifa/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/porifa/laravel-stubs)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require porifa/laravel-stubs
```

You can publish the migrations with:

```bash
php artisan vendor:publish --tag="laravel-stubs-migrations"
```

Now run the migrations with:

```bash
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-stubs-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-stubs-views"
```

## Usage

```php
$stubs = new Porifa\Stubs();
echo $stubs->echoPhrase('Hello, Porifa!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/AamirSohailKmAs/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Aamir Sohail KmAs](https://github.com/AamirSohailKmAs)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
