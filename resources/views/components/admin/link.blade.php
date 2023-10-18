@props([
    'href',
])

<div class="mb-6">
    <a
        href="{{ route($href) }}"
        class="bg-blue-600 hover:bg-blue-700 focus:ring-blue-400 focus:outline-none text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5"
    >
        {{ $slot }}
    </a>
</div>
