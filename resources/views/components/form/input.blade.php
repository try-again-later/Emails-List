@props([
    'label',
    'name',
    'type' => 'text',
])

<div {{ $attributes }}>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" />
</div>
