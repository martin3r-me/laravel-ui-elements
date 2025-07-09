<?php

namespace Martin3r\LaravelUiElements;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facade\Blade;
use Livewire\Livewire;

class UiElementsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Views laden & publishen
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui-elements');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/ui-elements'),
        ], 'views');

        // Assets publishen
        $this->publishes([
            __DIR__.'/../resources/assets/css/ui-elements.css' => public_path('vendor/ui-elements/ui-elements.css'),
            __DIR__.'/../resources/assets/js/ui-elements.js'   => public_path('vendor/ui-elements/ui-elements.js'),
        ], 'assets');

        // Blade-Components registrieren
        Blade::component('ui-elements::components.button', 'ui-button');

        // Livewire-Komponenten registrieren (optional)
        if (class_exists(Livewire::class)) {
            Livewire::component('ui-modal', \Martin3r\LaravelUiElements\Http\Livewire\UiModal::class);
        }
    }

    public function register(): void
    {
        // Config mergen
        $this->mergeConfigFrom(__DIR__.'/../config/ui-elements.php', 'ui-elements');
    }
}