<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class SetAvatarAction
{
    public function __invoke(User $user, UploadedFile $avatar): string
    {
        return $user->avatar
            ? $this->update($user->avatar, $avatar)
            : $this->upload($avatar);
    }

    private function upload(UploadedFile $avatar): string
    {
        return Storage::putFile('avatars', $avatar);
    }

    private function update(string $oldAvatar, UploadedFile $newAvatar): string
    {
        Storage::delete($oldAvatar);

        return $this->upload($newAvatar);
    }
}
