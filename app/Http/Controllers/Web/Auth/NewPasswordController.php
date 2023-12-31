<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\NewPasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    public function create(): View
    {
        return view('web.auth.reset-password');
    }

    public function store(NewPasswordRequest $request): RedirectResponse
    {
        $status = Password::reset(
            $request->validated(),
            function ($user) use ($request) {
                $user->update([
                    'password' => Hash::make($request->get('password')),
                ]);
            }
        );

        return $status == Password::PASSWORD_RESET
            ? to_route('login')->with('status', 'Ваш пароль был успешно изменен! Войдите в аккаунт с новым паролем.')
            : back()->withErrors(['email' => __($status)])
                ->onlyInput('email');
    }
}
