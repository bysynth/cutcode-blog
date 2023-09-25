@props([
    'link',
])

<div class="text-xxs md:text-xs">
    <a class="text-white hover:text-white/70 font-bold"
       href="{{ $link }}"
    >
        {{ $slot }}
    </a>
</div>
