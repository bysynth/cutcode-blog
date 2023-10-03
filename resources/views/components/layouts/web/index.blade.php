<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-layouts.common.head :title="$title"/>

<body class="antialiased">
    <x-layouts.web.header/>

    <main class="py-16 lg:py-20">
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <x-layouts.web.footer/>
</body>
</html>
