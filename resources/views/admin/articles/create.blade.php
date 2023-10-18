<x-layouts.admin>
    <x-slot:title>
        Создание статьи - Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-3xl mb-4">Создание статьи</h1>

    <x-admin.link href="admin.articles.index">
        Назад
    </x-admin.link>

    <x-admin.forms.form
        enctype="multipart/form-data"
        :action="route('admin.articles.store')"
    >

        <x-admin.forms.input
            name="title"
            label="Заголовок *"
            placeholder="Заголовок статьи"
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
