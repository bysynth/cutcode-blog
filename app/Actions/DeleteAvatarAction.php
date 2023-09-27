<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class DeleteAvatarAction
{
    public function __invoke(User $user): void
    {
        Storage::delete($user->avatar);

        $user->update([
            'avatar' => null
        ]);
    }
}
