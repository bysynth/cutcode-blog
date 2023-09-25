@props([
    'status'
])

@if($status)
    <div class="text-center p-4 my-4 rounded-lg shadow-xl bg-card">
        {{ $status }}
    </div>
@endif
