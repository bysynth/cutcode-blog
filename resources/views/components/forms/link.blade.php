@props([
    'text' => '',
    'link' => '#',
    'underline' => false,
])

<div class="text-xxs md:text-xs">
    {{ $text }}
    <a
        href="{{ $link }}"
        {{ $attributes
            ->class([
                'text-white hover:text-white/70 font-bold',
                'underline' => $underline
            ])
        }}
    >
        {{ $slot }}
    </a>
</div>
