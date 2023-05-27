<?php

namespace Mansoor\FilamentTorchlight;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentTorchlightServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-torchlight' => __DIR__.'/../resources/dist/css/filament-torchlight.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-torchlight')
            ->hasAssets()
            ->hasViews();
    }
}
