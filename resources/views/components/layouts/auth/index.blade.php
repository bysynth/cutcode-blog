<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-layouts.common.head :title="$title"/>

<body>
    <main class="bg-darkblue text-white md:min-h-screen md:flex md:items-center md:justify-center py-16 lg:py-20">
        <div class="container">
            <div class="text-center">
                <a rel="home" href="{{ route('home') }}">
                    <img alt="CutCode"
                         class="w-[148px] md:w-[201px] h-[36px] md:h-[50px] inline-block"
                         src="{{ Vite::image('nav/logo.svg') }}"
                    >
                </a>
            </div>

            {{ $slot }}

        </div>
    </main>
</body>
</html>
