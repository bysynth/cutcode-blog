<div class="tasks-card flex flex-col rounded-3xl md:rounded-[40px] bg-card">
    <div class="tasks-card-photo overflow-hidden h-40 xs:h-48 sm:h-[280px] rounded-3xl md:rounded-[40px]">
        <a href="{{ route('articles.show', $article) }}">
            <img src="{{ $article->cover }}"
                 class="object-cover w-full h-full"
                 alt="{{ $article->title }}">
        </a>
    </div>
    <div class="grow flex flex-col pt-6 sm:pt-10 pb-6 sm:pb-10 2xl:pb-14 px-5 sm:px-8 2xl:px-12">
        <h3 class="text-md md:text-lg 2xl:text-xl font-black">{{ $article->title }}</h3>
        <div class="flex flex-col grow">

            <div class="flex flex-wrap gap-3 mt-7">
                @foreach($article->categories as $category)
                    <x-pages.category-button :$category/>
                @endforeach
            </div>

            <div class="flex flex-wrap sm:items-center justify-center sm:justify-between mt-auto pt-8 sm:pt-10">
                <a class="btn btn-pink" href="{{ route('articles.show', $article) }}">
                    Подробнее
                </a>
            </div>
        </div>
    </div>
</div>
