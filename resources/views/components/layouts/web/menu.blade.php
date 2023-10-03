<div class="header-menu grow hidden lg:flex items-center ml-8 mr-8 gap-8">
    <nav class="2xl:flex gap-8">
        @foreach($menu as $menuItem)
            <a href="{{ route($menuItem['route']) }}"
                @class([
                     'ml-4 mr-4',
                     'text-pink' => $isActive($menuItem['active']),
                     'text-white hover:text-pink' => !$isActive($menuItem['active']),
                 ])
            >
                {{ $menuItem['title'] }}
            </a>
        @endforeach
    </nav>
</div>
