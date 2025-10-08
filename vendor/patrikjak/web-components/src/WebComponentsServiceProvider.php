<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class WebComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerComponents();

        $this->loadViews();

        $this->publishViews();
        $this->publishAssets();
    }

    public function publishAssets(): void
    {
        $this->publishes(
            [__DIR__ . '/../public/assets' => public_path('vendor/pjcomponents/assets')],
            ['pjcomponents-assets'],
        );
    }

    private function registerComponents(): void
    {
        Blade::componentNamespace('Patrikjak\\WebComponents\\View', 'pjcomponents');
    }

    private function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'pjcomponents');
    }

    private function publishViews(): void
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/pjcomponents'),
        ], 'pjcomponents-views');
    }
}