<?php

namespace App\Http\Controllers\Admin\Auth;

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
        return view('web.auth.login', [
            'title' => 'Вход в админку',
            'route' => route('admin.login.store'),
            'links' => false,
        ]);
    }

    public function store(LoginRequest $request, LoginAction $loginAction): RedirectResponse
    {
        return $loginAction($request->validated(), 'admin', 'admin.dashboard');
    }

    public function destroy(LogoutAction $logoutAction): RedirectResponse
    {
        return $logoutAction('admin', 'admin.login.create');
    }
}
