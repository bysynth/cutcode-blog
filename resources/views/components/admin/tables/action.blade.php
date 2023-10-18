@props([
    'route',
    'model'
])

<a href="{{ route($route, $model) }}"
   class="inline-block font-medium text-blue-600 hover:underline mb-2"
>
    {{ $slot }}
</a>
