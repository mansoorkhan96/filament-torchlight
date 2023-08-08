<?php

namespace Mansoor\FilamentTorchlight;

use Spatie\LaravelPackageTools\Package;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTorchlightServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-torchlight';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasAssets()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register(
            [Css::make(static::$name, __DIR__ . '/../resources/dist/css/filament-torchlight.css')->loadedOnRequest()],
            'mansoor/filament-torchlight'
        );
    }
}
