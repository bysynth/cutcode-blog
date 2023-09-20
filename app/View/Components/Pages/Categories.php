<?php

namespace App\View\Components\Pages;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Categories extends Component
{
    public Collection $categories;

    public function __construct($categories = null)
    {
        $this->categories = $categories ?? Category::all();
    }

    //TODO: сделать закрашивание выбранной категории

    public function render(): View
    {
        return view('components.pages.categories');
    }
}
