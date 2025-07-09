<?php

return [

    /*
    |--------------------------------------------------------------------------
    | UI Element Colors
    |--------------------------------------------------------------------------
    |
    | Hier definierst du für jede Farb­kategorie den Hintergrund (bg) und
    | die dazu passende Textfarbe (on), damit der Kontrast immer passt.
    |
    */

    'colors' => [
        'primary'   => [
            'bg' => env('UI_PRIMARY_COLOR',   '#00cec9'),
            'on' => env('UI_ON_PRIMARY_COLOR','#ffffff'),
        ],
        'secondary' => [
            'bg' => env('UI_SECONDARY_COLOR',   '#6B7280'),
            'on' => env('UI_ON_SECONDARY_COLOR','#ffffff'),
        ],
        'success'   => [
            'bg' => env('UI_SUCCESS_COLOR',   '#10B981'),
            'on' => env('UI_ON_SUCCESS_COLOR','#ffffff'),
        ],
        'danger'    => [
            'bg' => env('UI_DANGER_COLOR',   '#EF4444'),
            'on' => env('UI_ON_DANGER_COLOR','#ffffff'),
        ],
        'warning'   => [
            'bg' => env('UI_WARNING_COLOR',   '#F59E0B'),
            'on' => env('UI_ON_WARNING_COLOR','#000000'),
        ],
        'info'      => [
            'bg' => env('UI_INFO_COLOR',   '#3B82F6'),
            'on' => env('UI_ON_INFO_COLOR','#ffffff'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Button Variants
    |--------------------------------------------------------------------------
    |
    | Hier mapst du die Varianten (primary, secondary, …) auf die CSS-Utility
    | Klassen für Hintergrund (bg-*) und Text (text-on-*).
    |
    */

    'button' => [
        'primary'   => ['bg' => 'bg-primary',   'text' => 'text-on-primary'],
        'secondary' => ['bg' => 'bg-secondary', 'text' => 'text-on-secondary'],
        'success'   => ['bg' => 'bg-success',   'text' => 'text-on-success'],
        'danger'    => ['bg' => 'bg-danger',    'text' => 'text-on-danger'],
        'warning'   => ['bg' => 'bg-warning',   'text' => 'text-on-warning'],
        'info'      => ['bg' => 'bg-info',      'text' => 'text-on-info'],
    ],

];