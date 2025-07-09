@props([
  'label'    => null,
  'name',
  'value'    => null,
  'errorKey' => $name,  // wenn du Fehler per $errors->get($errorKey] anzeigen willst
])

<div class="mb-4">
  @if($label)
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
      {{ $label }}
    </label>
  @endif

  <input
    type="text"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, $value) }}"
    {{ $attributes->merge([
        'class' => 'block w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500'
    ]) }}
  />

  @if ($errors->has($errorKey))
    <p class="mt-1 text-sm text-red-600">{{ $errors->first($errorKey) }}</p>
  @endif
</div>
