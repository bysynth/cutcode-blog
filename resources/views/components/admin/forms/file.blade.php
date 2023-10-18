@props([
    'name',
    'label',
])


<div class="mb-6">
    <x-admin.forms.label name="{{ $name }}" label="{{ $label }}"/>

    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="file"
        {{ $attributes->class([
            'block w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 focus:outline-none',
            'border-gray-300' => !$errors->has($name),
            'border-red-500' => $errors->has($name),
            ])
        }}
    >

    <x-admin.forms.error name="{{ $name }}"/>
</div>
