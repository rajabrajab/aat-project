<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Direct admin login
Route::get('/log/{userId}', function ($userId) {

    $user = User::find($userId);

    if (!$user) {
        return abort(404, 'User not found.');
    }

    if ($user->id === 1) {

        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Successfully logged in as admin.');
    }

    return abort(403, 'Unauthorized access.');
});

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {

    // Dashboard and profile routes
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

   //Profile
    Route::middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/avatar', [App\Http\Controllers\Admin\ProfileController::class, 'updateAvatar'])->name('profile.update.avatar');

    });

    // Resource routes
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class);
    Route::resource('invitations', App\Http\Controllers\Admin\InvitationController::class);
    Route::resource('templates', App\Http\Controllers\Admin\TemplateController::class);
    Route::resource('template_fields', App\Http\Controllers\Admin\TemplateFieldController::class);
    Route::resource('packages', App\Http\Controllers\Admin\PackageController::class);
    Route::resource('package_categories', App\Http\Controllers\Admin\PackageCategoryController::class);
    Route::resource('invitation_categories', App\Http\Controllers\Admin\InvitationCategoryController::class);
    Route::resource('payments', App\Http\Controllers\Admin\PaymentController::class);

    //settings
    Route::get('settings', [App\Http\Controllers\Admin\OptionController::class, 'index'])->name('settings.index');
    Route::post('settings', [App\Http\Controllers\Admin\OptionController::class, 'update'])->name('settings.update');

});
