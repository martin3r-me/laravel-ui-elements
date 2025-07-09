@props([
    'name',
    'label'    => null,
    'value'    => null,
    'variant'  => 'primary',
    'errorKey' => null,
])

@php
    // Farbwerte aus config/ui-elements.php
    $col      = config("ui-elements.colors.{$variant}");
    $errorKey = $errorKey ?: $name;
@endphp

<div class="mb-4">
    {{-- Label --}}
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    {{-- Input-Feld mit gemeinsamer Form-Control-Klasse und Variant-Border/Focus --}}
    <div style="--ui-{{ $variant }}: {{ $col['bg'] }};">
        <input
            type="text"
            id="{{ $name }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
            {{ $attributes->merge([
                'class' => implode(' ', [
                    'form-control',              // Basis-Klasse für Höhe, Padding, Radius
                    "border-{$variant}",       // border-primary → var(--ui-primary)
                    "focus:ring-{$variant}",   // focus:ring-primary
                ]),
            ]) }}
        />
    </div>

    {{-- Validierungsfehler --}}
    @error($errorKey)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
