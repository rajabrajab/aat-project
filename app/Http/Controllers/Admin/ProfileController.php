<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ProfileHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = ProfileHelper::getUser();
        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = ProfileHelper::getUser();

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

        ProfileHelper::updateInformation($user, $request->except('password', 'avatar'));

        if ($request->filled('password')) {
        $updateData['password'] = bcrypt($request->password);
        }

        return redirect()->route('admin.profile')->with('success', 'تم تحديث الملف الشخصي بنجاح.');
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:2048',
        ]);

        $user = ProfileHelper::getUser();
        ProfileHelper::updateAvatar($user, $request->file('avatar'));

        return redirect()->back()->with('success', 'تم تحديث الصورة الشخصية');
    }
}
