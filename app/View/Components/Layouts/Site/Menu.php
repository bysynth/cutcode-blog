<?php

namespace App\View\Components\Layouts\Site;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Menu extends Component
{
    public array $menu;

    public function __construct()
    {
        $this->menu = config('menu.site');
    }

    public function isActive(string $route): bool
    {
        return Request::routeIs($route) || Request::routeIs(str_replace('index', '*', $route));
    }

    public function render(): View
    {
        return view('components.layouts.site.menu');
    }
}
