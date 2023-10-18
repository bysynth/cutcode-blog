@props([
    'name',
    'label',
    'placeholder' => '',
    'value',
])

@aware([
    'model' => null,
])

<div class="mb-6">
    <x-admin.forms.label name="{{ $name }}" label="{{ $label }}"/>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        rows="8"
        {{ $attributes->class([
           'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500',
           'border-gray-300' => !$errors->has($name),
           'border-red-500' => $errors->has($name),
           ])
        }}
    >{{ old($name, $model) }}</textarea>

    <x-admin.forms.error name="{{ $name }}"/>
</div>
