<div class="overflow-y-auto py-5 px-3 h-full bg-white">
    <ul class="space-y-2">
        @foreach($menu as $menuItem)
            <li>
                <a href="{{ route($menuItem['route']) }}"
                    @class([
                        'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg',
                        'bg-gray-100' => $isActive($menuItem['active']),
                        'hover:bg-gray-100' => !$isActive($menuItem['active']),
                    ])
                >
                    <span class="ml-2">{{ $menuItem['title'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
