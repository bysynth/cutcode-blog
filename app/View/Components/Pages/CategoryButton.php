<?php

namespace App\View\Components\Pages;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryButton extends Component
{
    public function __construct(
        public Category $category,
        public bool $checkSelection = false
    ) {
    }

    public function isSelected($slug): bool
    {
        if (!$this->checkSelection) {
            return false;
        }

        return request()->route('category')?->slug === $slug;
    }

    public function render(): View
    {
        return view('components.pages.category-button');
    }
}
