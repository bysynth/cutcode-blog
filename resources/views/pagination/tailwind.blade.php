@if ($paginator->hasPages())
    <nav class="mt-4">
        <ul class="flex flex-wrap items-center justify-center gap-3">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="block p-3 text-sm font-black leading-none text-white">{{ $element }}</li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active block p-3 text-sm font-black leading-none text-pink">
                                {{ $page }}
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                   class="block p-3 text-sm font-black leading-none text-white hover:text-pink">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
@endif
