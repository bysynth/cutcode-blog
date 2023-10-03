<x-layouts.web>
    <x-slot:title>
        {{ $article->title }} - {{ config('app.name') }}
    </x-slot:title>

    <img class="w-full rounded-xl my-8" src="{{ $article->cover }}" alt="{{ $article->title }}">

    <div class="prose prose-lg min-w-full prose-img:rounded-xl prose-invert">
        <x-pages.title>
            {{ $article->title }}
        </x-pages.title>

        <div class="flex flex-wrap gap-3 mt-7">
            @foreach($article->categories as $category)
                <x-pages.category-button :$category/>
            @endforeach
        </div>

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
</x-layouts.web>

