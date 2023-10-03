<x-layouts.admin>
    <x-slot:title>
        Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-2xl">Привет, {{ auth('admin')->user()->name }}!</h1>

</x-layouts.admin>
