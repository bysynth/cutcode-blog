@props([
    'type' => 'submit'
])

<button
    type="{{ $type }}"
    {{ $attributes
        ->class(['w-full btn btn-pink'])
    }}
>
    {{ $slot }}
</button>
