<x-layouts.admin>
    <x-slot:title>
        Категории - Админка - {{ config('app.name') }}
    </x-slot:title>

    <h1 class="text-3xl mb-4">Категории</h1>

    <x-admin.link href="admin.categories.create">
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
                    Slug
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
            @foreach($categories as $category)
                <x-admin.tables.tr class="bg-white border-t">
                    <x-admin.tables.th scope="row">
                        {{ $category->name }}
                    </x-admin.tables.th>
                    <x-admin.tables.td>
                        {{ $category->slug }}
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        {{ $category->created_at }}
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        {{ $category->updated_at }}
                    </x-admin.tables.td>
                    <x-admin.tables.td>
                        <x-admin.tables.action route="admin.categories.edit" :model="$category">
                            Редактировать
                        </x-admin.tables.action>

                        <x-admin.tables.delete route="admin.categories.destroy" :model="$category" />
                    </x-admin.tables.td>
                </x-admin.tables.tr>
            @endforeach
        </x-admin.tables.tbody>
    </x-admin.tables.crud>

    {{ $categories->links('pagination.admin') }}

</x-layouts.admin>
