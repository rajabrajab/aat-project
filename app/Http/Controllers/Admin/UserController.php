<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

     public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'avatar' => 'nullable|image|max:2048',
            'source_platform' => 'required|string',
            'full_name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'role' => 'required|string|max:50',
            'permissions' => 'nullable|string|max:255',
            'username' => 'required|string|max:50|unique:users,username',
            'country' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'city' => 'required|string|max:100',
            'utm' => 'nullable|string|max:255',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['deleted_by'] = auth()->id();

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'avatar' => 'nullable|image|max:2048',
            'source_platform' => 'required|string',
            'full_name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'role' => 'required|string|max:50',
            'permissions' => 'nullable|string|max:255',
            'username' => 'required|string|max:50|unique:users,username,' . $user->id,
            'country' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'city' => 'required|string|max:100',
            'utm' => 'nullable|string|max:255',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $validated['deleted_by'] = auth()->id();

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->update(['deleted_by' => auth()->id()]);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
