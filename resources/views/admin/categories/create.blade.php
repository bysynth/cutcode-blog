<x-layouts.admin>
    <x-slot:title>
        Создание категории - Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-3xl mb-4">Создание категории</h1>

    <x-admin.link href="admin.categories.index">
        Назад
    </x-admin.link>

    <x-admin.forms.form :action="route('admin.categories.store')">
        <x-admin.forms.input
            name="name"
            label="Название *"
            placeholder="Название категории"
            required
        />

        <x-admin.forms.button>
            Сохранить
        </x-admin.forms.button>
    </x-admin.forms.form>

</x-layouts.admin>
