<x-layouts.admin>
    <x-slot:title>
        Редактирование категории - Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-3xl mb-4">Редактирование категории</h1>

    <x-admin.link href="admin.categories.index">
        Назад
    </x-admin.link>

    <x-admin.forms.form :action="route('admin.categories.update', $category)" :model="$category">
        <x-admin.forms.input
            name="name"
            label="Название *"
            placeholder="Название категории"
            required
        />

        <x-admin.forms.input
            name="slug"
            label="Slug *"
            placeholder="Slug"
            required
        />

        <x-admin.forms.button>
            Обновить
        </x-admin.forms.button>
    </x-admin.forms.form>

</x-layouts.admin>
