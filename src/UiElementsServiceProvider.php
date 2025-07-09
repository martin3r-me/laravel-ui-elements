<?php

namespace Martin3r\\LaravelUiElements;

use Illuminate\\Support\\ServiceProvider;
use Illuminate\\Support\\Facades\\Blade;

class UiElementsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Views publishen
        \$this->loadViewsFrom(__DIR__.'/../resources/views', 'ui-elements');
        \$this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/ui-elements'),
        ], 'views');

        // Assets publishen
        \$this->publishes([
            __DIR__.'/../resources/assets/css/ui-elements.css' => public_path('vendor/ui-elements/ui-elements.css'),
            __DIR__.'/../resources/assets/js/ui-elements.js'   => public_path('vendor/ui-elements/ui-elements.js'),
        ], 'assets');

        // Blade-Components registrieren
        Blade::component('ui-elements::components.button', 'ui-button');
    }

    public function register(): void
    {
        \$this->mergeConfigFrom(__DIR__.'/../config/ui-elements.php', 'ui-elements');
    }
}
