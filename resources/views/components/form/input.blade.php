@props([
    'label',
    'name',
    'type' => 'text',
    'required' => false,
])

<div {{ $attributes }}>
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        @if ($required) required @endif
    />
</div>
