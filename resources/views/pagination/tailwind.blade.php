@if ($paginator->hasPages())
    <nav class="mt-4">
        <ul class="flex flex-wrap items-center justify-center gap-3">
            @foreach($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $link)
                @if($page === $paginator->currentPage())
                    <li class="active block p-3 text-sm font-black leading-none text-pink">
                        {{ $page }}
                    </li>
                @else
                    <li>
                        <a href="{{ $link }}"
                           class="block p-3 text-sm font-black leading-none text-white hover:text-pink">
                            {{ $page }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
@endif
