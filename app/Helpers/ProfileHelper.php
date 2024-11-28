<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileHelper
{
    /**
     * Get the authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public static function getUser()
    {
        return Auth::user();
    }

    /**
     * Update user information.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param array $data
     * @return void
     */
    public static function updateInformation($user, array $data)
    {
        $user->update($data);

        $user->save();
    }

    /**
     * Update user avatar.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param \Illuminate\Http\UploadedFile $avatarFile
     * @return void
     */
    public static function updateAvatar($user, $avatarFile)
    {
        if ($user->avatar && Storage::exists($user->avatar)) {
            Storage::delete($user->avatar);
        }

        $avatarPath = $avatarFile->store('avatars', 'public');
        $user->avatar = $avatarPath;
        $user->save();
    }
}
