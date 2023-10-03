<?php

namespace App\Http\Controllers\Web\Auth;

use App\Actions\LoginAction;
use App\Actions\LogoutAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.login', [
            'title' => 'Вход в аккаунт',
            'route' => route('login'),
            'links' => true,
        ]);
    }

    public function store(LoginRequest $request, LoginAction $loginAction): RedirectResponse
    {
        return $loginAction($request->validated());
    }

    public function destroy(LogoutAction $logoutAction): RedirectResponse
    {
        return $logoutAction();
    }
}
