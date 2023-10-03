<?php

namespace App\Actions;

use Illuminate\Http\RedirectResponse;

class LogoutAction
{
    public function __invoke($guard = 'web', $redirectToRoute = 'home'): RedirectResponse
    {
        auth($guard)->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return to_route($redirectToRoute);
    }
}
