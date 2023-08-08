# Filament Torchlight

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mansoor/filament-torchlight.svg?style=flat-square)](https://packagist.org/packages/mansoor/filament-torchlight)
[![Total Downloads](https://img.shields.io/packagist/dt/mansoor/filament-torchlight.svg?style=flat-square)](https://packagist.org/packages/mansoor/filament-torchlight)

A [Torchlight](https://torchlight.dev/) plugin for [FilamentPHP](https://filamentphp.com), it provides a read-only field to hightlight the code under field.

## Installation

To install, require the package from composer:

```bash
composer require mansoor/filament-torchlight
```

### ⚠️ Use version `0.0.2` for Filament 2 support ⚠️

```bash
composer require "creagia/filament-code-field:^0.0.2"
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
