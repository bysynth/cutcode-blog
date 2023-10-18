<x-layouts.admin>
    <x-slot:title>
        Редактирование статьи - Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-3xl mb-4">Редактирование статьи</h1>

    <x-admin.link href="admin.articles.index">
        Назад
    </x-admin.link>

    <x-admin.forms.form
        enctype="multipart/form-data"
        :action="route('admin.articles.update', $article)"
        :model="$article"
    >

        <x-admin.forms.input
            name="title"
            label="Заголовок *"
            placeholder="Заголовок статьи"
            required
        />

        <x-admin.forms.input
            name="slug"
            label="Slug *"
            placeholder="Slug"
            required
        />

        <x-admin.forms.select
            :options="$categories"
            name="categories"
            label="Категории *"
            required
            multiple
        />

        <x-admin.forms.textarea
            name="content"
            label="Содержимое *"
            placeholder="Содержимое статьи"
            required
        />

        @isset($article->cover)
            <div class="flex mb-4 gap-4 items-center">
                <img src="{{ Storage::url($article->cover) }}"
                     alt="{{ $article->title }}"
                     class="w-1/2 rounded-lg border border-gray-300"
                >
                <x-admin.forms.button
                    type="button"
                    action="delete"
                    id="deleteCover"
                    data-article-id="{{$article->id}}"
                >
                    Удалить обложку
                </x-admin.forms.button>
            </div>
        @endisset

        <x-admin.forms.file
            name="cover"
            label="Обложка"
        />

        <x-admin.forms.input
            name="link"
            label="Ссылка"
            placeholder="Ссылка на источник"
        />

        <x-admin.forms.button>
            Сохранить
        </x-admin.forms.button>
    </x-admin.forms.form>

</x-layouts.admin>
