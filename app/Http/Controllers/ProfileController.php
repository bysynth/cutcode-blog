<?php

namespace App\Http\Controllers;

use App\Actions\DeleteAvatarAction;
use App\Actions\SetAvatarAction;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('profile.edit', [
            'user' => auth()->user(),
        ]);
    }

    public function update(UpdateProfileRequest $request, SetAvatarAction $action): RedirectResponse
    {
        $user = auth()->user();
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $action($user, $request->file('avatar'));
        }

        $user->update($data);

        return back()->with('message', 'Данные профиля обновлены');
    }

    public function deleteAvatar(DeleteAvatarAction $action): void
    {
        $action(auth()->user());
    }
}
