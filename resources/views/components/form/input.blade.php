@props([
    'label',
    'name',
    'type' => 'text',
    'required' => false,
])

<div {{ $attributes->class('form-control') }}>
    <label for="{{ $name }}" class="label">
        <span class="label-text">{{ $label }}</span>
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        @if ($required) required @endif
        value="{{ old($name) }}"
        placeholder="{{ $label }}"
        class="input input-bordered @error($name) input-error @enderror"
    />
    @error($name)
        <p class="text-sm m-0 text-red-600">{{ $message }}</p>
    @enderror
</div>
