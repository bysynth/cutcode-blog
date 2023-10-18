@props([
    'id',
    'old',
])

<option value="{{ $id }}" @selected(in_array($id, $old ?? [])) >
    {{ $slot }}
</option>
