<x-layouts.site>
    <x-slot:title>
        Главная - {{ config('app.name') }}
    </x-slot:title>

    <x-pages.title>
        Лучшие статьи
    </x-pages.title>

    <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">
        @foreach($articles as $article)
            <x-articles.item :$article />
        @endforeach
    </div>
</x-layouts.site>
