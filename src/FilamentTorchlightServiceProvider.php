<?php

namespace Mansoor\FilamentTorchlight;

use Spatie\LaravelPackageTools\Package;
use Filament\PluginServiceProvider;

class FilamentTorchlightServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-torchlight' => __DIR__ . '/../resources/dist/css/filament-torchlight.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-torchlight')
            ->hasAssets()
            ->hasViews();
    }
}
