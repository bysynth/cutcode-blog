@props([
    'text' => '',
    'link',
    'underline' => false,
])

<div class="text-xxs md:text-xs">
    {{ $text }}
    <a {{ $attributes
            ->class([
                'text-white hover:text-white/70 font-bold',
                'underline' => $underline
            ])
        }}
       href="{{ $link }}"
    >
        {{ $slot }}
    </a>
</div>
