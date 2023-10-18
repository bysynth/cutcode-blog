@props([
    'type' => 'submit',
    'action' => '',
])

<div class="mb-6">
    <button
        type="{{ $type }}"
        {{ $attributes
            ->class([
                'bg-purple-600 hover:bg-purple-700 focus:ring-purple-400 focus:outline-none text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5',
                'bg-red-600 hover:bg-red-700 focus:ring-red-400' => $action === 'delete',
                ])
        }}
    >
        {{ $slot }}
    </button>
</div>
