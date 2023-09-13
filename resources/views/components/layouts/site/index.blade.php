<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <title>Laravel</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#7843E9">
    <meta name="msapplication-TileColor" content="#7843E9">
    <meta name="theme-color" content="#7843E9">

    @vite(['resources/js/app.js'])
</head>
<body class="antialiased">

<x-layouts.site.header/>

<main class="py-16 lg:py-20">
    <div class="container">
        {{ $slot }}
    </div>
</main>

<x-layouts.site.footer/>

</body>
</html>
