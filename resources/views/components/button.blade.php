@props(['variant' => 'primary'])
@php
    $cfg = config('ui-elements.button')[$variant];
@endphp
<button {{ \$attributes->merge(['class' => "px-4 py-2 rounded {$cfg['bg']} {$cfg['text']}"]) }}>
    {{ $slot }}
</button>
