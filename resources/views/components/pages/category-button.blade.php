<a href="{{ route('site.articles.byCategory', $category) }}"
    @class([
         'grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap',
         'bg-pink' => $isSelected($category->slug),
     ])
>
    {{ $category->name }}
</a>
