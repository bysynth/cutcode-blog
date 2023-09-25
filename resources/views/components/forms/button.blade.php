@props([
    'type' => 'submit'
])

<button
    {{ $attributes
        ->class(['w-full btn btn-pink'])
        ->merge(['type' => $type])
    }}
>
    {{ $slot }}
</button>
