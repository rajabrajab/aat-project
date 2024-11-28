<?php

namespace App\Http\Controllers;

use App\Helpers\ProfileHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilerController extends Controller
{
    public function index()
    {
        $user = ProfileHelper::getUser();
        return view('userboard.profile', compact('user'));
    }

    public function updateInformation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = ProfileHelper::getUser();
        ProfileHelper::updateInformation($user, $request->except('password', 'avatar'));

        return redirect()->back()->with('status', 'Profile updated successfully!');
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:2048',
        ]);

        $user = ProfileHelper::getUser();
        ProfileHelper::updateAvatar($user, $request->file('avatar'));

        return redirect()->back()->with('status', 'Avatar updated successfully!');
    }

    public function deleteAccount()
    {
        $user = ProfileHelper::getUser();
        $user->delete();
        Auth::logout();

        return redirect('/')->with('status', 'Account deleted successfully.');
    }
}
