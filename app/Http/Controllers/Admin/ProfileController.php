<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => 'nullable|min:8',
            'full_name' => 'required|string|max:255',
            'username' => ['required', 'string', 'max:50', Rule::unique('users', 'username')->ignore($user->id)],
            'country' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'city' => 'required|string|max:100',
        ]);

        $user->update($request->except('password', 'avatar'));

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'تم تحديث الملف الشخصي بنجاح.');
    }

    public function updateAvatar(Request $request)
{
    $request->validate([
        'avatar' => 'required|image|max:2048',
    ]);

    $user = Auth::user();


    if ($request->hasFile('avatar')) {

        if ($user->avatar && \Storage::exists($user->avatar)) {
            \Storage::delete($user->avatar);
        }


        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $avatarPath;
        $user->save();
    }

    return redirect()->back()->with('success', 'تم تحديث الصورة الشخصية');
}

}
