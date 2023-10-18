@props([
    'scope' => 'col'
])

<th scope="{{ $scope }}"
    {{ $attributes
        ->class([
                'px-6 py-3' => $scope === 'col',
                'px-6 py-4 font-medium text-gray-900 whitespace-nowrap' => $scope === 'row',
            ])
    }}
>
    {{ $slot }}
</th>
