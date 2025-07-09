<?php

return [
    'colors' => [
        'primary'   => env('UI_PRIMARY_COLOR', '#4F46E5'),
        'secondary' => env('UI_SECONDARY_COLOR', '#6B7280'),
        'success'   => env('UI_SUCCESS_COLOR', '#10B981'),
        'danger'    => env('UI_DANGER_COLOR', '#EF4444'),
        'warning'   => env('UI_WARNING_COLOR', '#F59E0B'),
        'info'      => env('UI_INFO_COLOR', '#3B82F6'),
    ],
    'button' => [
        'primary'   => ['bg' => 'bg-primary',   'text' => 'text-white'],
        'secondary' => ['bg' => 'bg-secondary', 'text' => 'text-white'],
        'success'   => ['bg' => 'bg-success',   'text' => 'text-white'],
        'danger'    => ['bg' => 'bg-danger',    'text' => 'text-white'],
    ],
];
