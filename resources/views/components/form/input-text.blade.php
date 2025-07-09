@props([
    'name',
    'label'    => null,
    'value'    => null,
    'variant'  => 'primary',
    'errorKey' => null,
])

@php
    $col      = config("ui-elements.colors.{$variant}");
    $errorKey = $errorKey ?: $name;
@endphp

<div>
    {{-- Label --}}
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    {{-- Wrapper zum Setzen der CSS-Variablen für Border & Fokus --}}
    <div style="--ui-{{ $variant }}: {{ $col['bg'] }};">
        <input
            type="text"
            id="{{ $name }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
            {{ $attributes->merge([
                'class' => implode(' ', [
                    'form-control',                     // Basis-Höhe, Padding, Radius
                    "border-{$variant}",                // border-primary → var(--ui-primary)
                    "focus:border-{$variant}",          // focus:border-primary
                    "focus:ring-2",                     // Ring-Breite
                    "focus:ring-{$variant}",            // focus:ring-primary (100% Deckkraft)
                    "focus:ring-offset-1",              // Abstand Ring ↔ Border
                    "focus:ring-offset-white",          // weißer Hintergrund hinter dem Ring
                ]),
            ]) }}
        />
    </div>

    {{-- Validierungsfehler in Theme-Danger --}}
    @error($errorKey)
        <p class="mt-1 text-sm text-danger">{{ $message }}</p>
    @enderror
</div>