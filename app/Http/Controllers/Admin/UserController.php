<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\FileHelper;
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

   public function store(UserRequest $request)
{
    $validated = $request->validated();


    $validated['password'] = bcrypt($validated['password']);

    if ($request->hasFile('avatar')) {
        $validated['avatar'] = FileHelper::uploadFile($request->file('avatar'), 'avatars');
    }

    User::create($validated);

    return redirect()->route('users.index')->with('success', 'User created successfully!');
}

    public function update(UserRequest $request, User $user)
{

    $validated = $request->validated();

    // Hash the password if provided
    if ($request->filled('password')) {
        $validated['password'] = bcrypt($validated['password']);
    }

    // Upload the avatar if provided
    if ($request->hasFile('avatar')) {
        $validated['avatar'] = FileHelper::uploadFile($request->file('avatar'), 'avatars');
    }


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
