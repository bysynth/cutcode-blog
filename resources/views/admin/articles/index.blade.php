<x-layouts.admin>
    <x-slot:title>
        Статьи - Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-3xl mb-4">Статьи</h1>

    <x-admin.link href="admin.articles.create">
        Добавить
    </x-admin.link>

    <x-flash.crud :crud-message="session('crudMessage')"/>

    <x-admin.tables.crud>
        <x-admin.tables.thead>
            <x-admin.tables.tr>
                <x-admin.tables.th>
                    Название
                </x-admin.tables.th>
                <x-admin.tables.th>
                    Категории
                </x-admin.tables.th>
                <x-admin.tables.th>
                    Автор
                </x-admin.tables.th>
                <x-admin.tables.th>
                    Обложка
                </x-admin.tables.th>
                <x-admin.tables.th>
                    Создано
                </x-admin.tables.th>
                <x-admin.tables.th>
                    Обновлено
                </x-admin.tables.th>
                <x-admin.tables.th>
                    Действия
                </x-admin.tables.th>
            </x-admin.tables.tr>
        </x-admin.tables.thead>

        <x-admin.tables.tbody>
            @foreach($articles as $article)
                <x-admin.tables.tr class="bg-white border-t">
                    <x-admin.tables.th scope="row">
                        <a href="{{ route('articles.show', $article) }}" target="_blank" class="hover:underline">
                            {{ $article->title }}
                        </a>
                    </x-admin.tables.th>
                    <x-admin.tables.td>
                        @foreach($article->categories as $category)
                            <span class="block bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded mb-2">
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        {{ $article->author->name }}
                    </x-admin.tables.td>
                    <x-admin.tables.td class="text-center">
                        @unless($article->cover)
                            <svg class="w-[30px] h-[30px] text-gray-800 inline-block"
                                 aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 20 20"
                            >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        @else
                            <img src="{{ Storage::url($article->cover) }}"
                                 alt="{{ $article->title }}"
                                 class="w-24"
                            >
                        @endunless
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        {{ $article->created_at }}
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        {{ $article->updated_at }}
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        <x-admin.tables.action route="admin.articles.edit" :model="$article">
                            Редактировать
                        </x-admin.tables.action>

                        <x-admin.tables.delete route="admin.articles.destroy" :model="$article" />
                    </x-admin.tables.td>
                </x-admin.tables.tr>
            @endforeach
        </x-admin.tables.tbody>
    </x-admin.tables.crud>

    {{ $articles->links('pagination.admin') }}

</x-layouts.admin>
