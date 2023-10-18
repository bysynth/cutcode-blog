<?php

namespace App\Actions;

use Illuminate\Http\RedirectResponse;

class LoginAction
{
    public function __invoke(
        array $credentials,
        string $guard = 'web',
        string $redirectToRoute = 'home'
    ): RedirectResponse {
        if (!auth($guard)->attempt($credentials)) {
            return back()->withErrors([
                'email' => __('auth.failed')
            ])->onlyInput('email');
        }

        request()->session()->regenerate();

        return to_route($redirectToRoute);
    }
}
