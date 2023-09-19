<x-layouts.site>
    <x-pages.title>
        Статьи
    </x-pages.title>

    <x-articles.categories/>

    <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">
        @foreach($articles as $article)
            <x-articles.item :$article />
        @endforeach
    </div>

    {{ $articles->links('pagination.tailwind') }}

</x-layouts.site>
