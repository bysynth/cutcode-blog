<?php

namespace App\Http\Controllers\Web;

use App\Actions\DeleteAvatarAction;
use App\Actions\SetAvatarAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Profile\UpdatePasswordRequest;
use App\Http\Requests\Web\Profile\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('web.profile.edit', [
            'user' => auth('web')->user(),
        ]);
    }

    public function update(UpdateProfileRequest $request, SetAvatarAction $setAvatarAction): RedirectResponse
    {
        $user = auth('web')->user();
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $setAvatarAction($user, $request->file('avatar'));
        }

        $user->update($data);

        return back()->with('message', 'Данные профиля обновлены');
    }

    public function deleteAvatar(DeleteAvatarAction $deleteAvatarAction): void
    {
        $deleteAvatarAction(auth('web')->user());
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $newPassword = $request->input('password');

        auth('web')->user()->update([
            'password' => Hash::make($newPassword),
        ]);

        return back()->with('message', 'Пароль успешно изменен');
    }
}
