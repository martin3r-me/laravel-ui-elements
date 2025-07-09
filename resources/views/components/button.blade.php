@props(['variant' => 'primary'])

@php
    $cfg = config('ui-elements.colors.' . $variant);
    $bgClass = "bg-{$variant}";   // uses UI CSS variable
    $textClass = "text-on-{$variant}";
@endphp

<button {{ $attributes->merge([
    'class' => implode(' ', [
        'btn',               // Basis-Button-Klasse (Höhe, Padding, Flexalignment)
        $bgClass,            // z.B. bg-primary → var(--ui-primary)
        $textClass,          // z.B. text-on-primary → var(--ui-on-primary)
    ]),
]) }}>
    {{ $slot }}
</button>