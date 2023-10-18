@props([
    'action',
    'method' => 'POST',
    'model' => null,
])

<form
    action="{{ $action }}"
    method="{{ $method }}"
    {{ $attributes->merge(['class' => 'bg-white p-4 rounded-lg border w-2/3']) }}
>
    @csrf
    @if(!is_null($model))
       @method('PUT')
    @endif

    {{ $slot }}
</form>
