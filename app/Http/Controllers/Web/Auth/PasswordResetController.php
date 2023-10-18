<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PasswordResetRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetController extends Controller
{
    public function create(): View
    {
        return view('web.auth.forgot-password');
    }

    public function store(PasswordResetRequest $request): RedirectResponse
    {
        Password::sendResetLink(
            $request->validated()
        );

        return back()->with('status', __(Password::RESET_LINK_SENT));
    }
}
