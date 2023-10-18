@props([
    'name',
    'label',
    'options'
])

@aware([
    'model' => null,
])

<div class="mb-6">
    <x-admin.forms.label name="{{ $name }}" label="{{ $label }}"/>

    <select
        name="{{ $name . '[]' }}"
        id="{{ $name }}"
        {{ $attributes
            ->class([
                'border bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5',
                'border-gray-300' => !$errors->hasAny([$name, "$name.*"]),
                'border-red-500' => $errors->hasAny([$name, "$name.*"]),
                ])
        }}
    >
        @foreach($options as $id => $value)
            <x-admin.forms.option :id="$id" :old="old($name, $model?->$name->modelKeys())">
                {{ $value }}
            </x-admin.forms.option>
        @endforeach
    </select>

    <x-admin.forms.error name="{{ $name }}"/>
    <x-admin.forms.error name="{{ $name . '.*' }}"/>
</div>
