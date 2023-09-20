<x-layouts.site>
    <img class="w-full rounded-xl my-8" src="{{ $article->cover }}" alt="{{ $article->title }}">

    <div class="prose prose-lg min-w-full prose-img:rounded-xl prose-invert">
        <x-pages.title>
            {{ $article->title }}
        </x-pages.title>

        <x-pages.categories :categories="$article->categories"/>

        <div class="mt-4 break-words">
            {!! $article->content !!}
        </div>
        <div>
            <span class="lead">Автор:</span> {{ $article->author->name }}
        </div>
        @isset($article->link)
            <div>
                <span class="lead">Источник:</span>
                <a href="{{ $article->link }}" target="_blank" rel="nofollow">{{ $article->link }}</a>
            </div>
        @endisset
    </div>
</x-layouts.site>

