@props([
    'name',
    'placeholder' => '',
    'type' => 'text',
    'value' => '',
])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ old($name, $value) }}"
    {{ $attributes
        ->class([
            'w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/10 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold'
        ])
    }}
>

<x-forms.error name="{{ $name }}"/>
