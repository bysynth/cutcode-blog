@props([
    'action'
])

<form
    method="POST"
    action="{{ $action }}"
    {{ $attributes
        ->class([
            'space-y-3'
        ])
    }}
>
    @csrf

    {{ $slot }}
</form>
