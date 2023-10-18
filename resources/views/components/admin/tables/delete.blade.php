@props([
    'route',
    'model'
])

<form action="{{ route($route, $model) }}" method="POST">

    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="inline-block font-medium text-red-600 hover:underline"
        onclick="return confirm('Действительно удалить?')"
    >
        Удалить
    </button>
</form>
