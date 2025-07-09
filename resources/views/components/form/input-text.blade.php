@props([ 'name', 'label' => null, 'value' => null, 'variant' => 'primary', 'errorKey' => null ])

@php
    $col      = config("ui-elements.colors.{$variant}");
    $errorKey = $errorKey ?: $name;
@endphp

<div {{ $attributes->only('class') }}> {{-- hier holen wir uns nur class --}}
  @if($label)
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
      {{ $label }}
    </label>
  @endif

  <div style="--ui-{{ $variant }}: {{ $col['bg'] }};">
    <input
      type="text"
      id="{{ $name }}"
      name="{{ $name }}"
      value="{{ old($name, $value) }}"
      class="form-control border-{{ $variant }} focus:border-{{ $variant }} focus:ring-2 focus:ring-{{ $variant }} focus:ring-offset-1 focus:ring-offset-white"
    />
  </div>

  @error($errorKey)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
  @enderror
</div>