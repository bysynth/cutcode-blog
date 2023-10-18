@props([
    'name',
    'label'
])

<label for="{{ $name }}" {{ $attributes->class(['block mb-2 text-sm font-medium text-gray-900']) }}>
    {{ $label }}
</label>
