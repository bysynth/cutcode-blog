<?php

namespace App\View\Components\Layouts;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Menu extends Component
{
    public array $menu;
    public bool $isAdmin;

    public function __construct()
    {
        $this->isAdmin = Request::routeIs('admin.*');

        $this->menu = $this->isAdmin
            ? config('menu.admin')
            : config('menu.web');
    }

    public function isActive(string $route): bool
    {
        return Request::routeIs($route);
    }

    public function render(): View
    {
        return $this->isAdmin
            ? view('components.layouts.admin.menu')
            : view('components.layouts.web.menu');
    }
}
