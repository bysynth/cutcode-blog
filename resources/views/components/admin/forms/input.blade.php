@props([
    'name',
    'label',
    'placeholder' => '',
    'type' => 'text',
])

@aware([
    'model' => null,
])

<div class="mb-6">
    <x-admin.forms.label name="{{ $name }}" label="{{ $label }}"/>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ old($name, $model) }}"
        {{ $attributes
            ->class([
                'border bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5',
                'border-gray-300' => !$errors->has($name),
                'border-red-500' => $errors->has($name),
                ])
        }}
    >

    <x-admin.forms.error name="{{ $name }}"/>
</div>
