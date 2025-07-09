@props([ 'name', 'label' => null, 'value' => null, 'variant' => 'primary', 'errorKey' => null ])

@php
    $col      = config("ui-elements.colors.{$variant}");
    $errorKey = $errorKey ?: $name;
@endphp

<div class="mb-4">
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
      {{ $attributes->merge([
          'class' => implode(' ', [
              'form-control',
              "border-{$variant}",              // border-primary
              "focus:border-{$variant}",        // focus:border-primary
              "focus:ring-2",
              "focus:ring-{$variant}",          // focus:ring-primary
              "focus:ring-offset-1 focus:ring-offset-white",
          ]),
      ]) }}
    />
  </div>

  @error($errorKey)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
  @enderror
</div>