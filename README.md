# Filament Torchlight

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mansoor/filament-torchlight.svg?style=flat-square)](https://packagist.org/packages/mansoor/filament-torchlight)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mansoor/filament-torchlight/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mansoor/filament-torchlight/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mansoor/filament-torchlight/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mansoor/filament-torchlight/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mansoor/filament-torchlight.svg?style=flat-square)](https://packagist.org/packages/mansoor/filament-torchlight)

A [Torchlight](https://torchlight.dev/) plugin for [FilamentPHP](https://filamentphp.com)

## Installation

To install, require the package from composer:

```bash
composer require mansoor/filament-torchlight
```

## Setup Torchlight

You must follow follow the Torchlight documentation to [Add Torchlight Middleware](https://torchlight.dev/docs/clients/laravel#middleware) and [Publish the Torchlight configuration file](https://torchlight.dev/docs/clients/laravel#configuration)

Once you are done. Make sure to create an API Token from [torchlight.dev](https://torchlight.dev) and add to your `.env` file.

```env
TORCHLIGHT_TOKEN=your_token_goes_here
```

## Usage

```php
use Mansoor\FilamentTorchlight\TorchlightCode;

class FileResource extends Resource
{
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TorchlightCode::make('code')
                    ->columnSpanFull()
                    ->theme('github-dark')
                    ->language('php')
            ]);
    }
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Mansoor Khan](https://github.com/mansoorkhan96)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
