<?php

namespace App\View\Components\Layouts\Site;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Menu extends Component
{
    public array $menu;

    public function __construct()
    {
        $this->menu = config('menus.site');
    }

    public function isActive(string $route): bool
    {
        return Route::currentRouteName() === $route;
    }

    public function render(): View
    {
        return view('components.layouts.site.menu');
    }
}
