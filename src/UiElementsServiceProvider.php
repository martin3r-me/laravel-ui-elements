<?php

namespace Martin3r\LaravelUiElements;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class UiElementsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Views laden & publishen
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui-elements');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui-elements'),
        ], 'views');
        // In der Boot-Methode, direkt vor dem Views-Publish-Block
        $this->publishes([
            __DIR__ . '/../config/ui-elements.php' => config_path('ui-elements.php'),
        ], 'config');

        // Assets publishen
        $this->publishes([
            __DIR__ . '/../resources/assets/css/ui-elements.css' => public_path('vendor/ui-elements/ui-elements.css'),
            __DIR__ . '/../resources/assets/js/ui-elements.js'   => public_path('vendor/ui-elements/ui-elements.js'),
        ], 'assets');

        // Blade-Components registrieren
        Blade::component('ui-elements::components.ui-styles', 'ui-styles');
        Blade::component('ui-elements::components.button', 'ui-button');
        Blade::component('ui-elements::components.form.input-text', 'form-input-text');
    }

    public function register(): void
    {
        // Config mergen
        $this->mergeConfigFrom(
            __DIR__ . '/../config/ui-elements.php',
            'ui-elements'
        );
    }
}
