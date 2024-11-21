<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware(['web'])->group(function () {

    // Dashboard and profile routes
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('admin.dashboard');

    Route::get('/profile', function () {
        return view('dashboard.profile.index');
    })->name('admin.profile');

    // Resource routes
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class);
    Route::resource('invitations', App\Http\Controllers\Admin\InvitationController::class);
    Route::resource('templates', App\Http\Controllers\Admin\TemplateController::class);
    Route::resource('template_fields', App\Http\Controllers\Admin\TemplateFieldController::class);
    Route::resource('packages', App\Http\Controllers\Admin\PackageController::class);
    Route::resource('package_categories', App\Http\Controllers\Admin\PackageCategoryController::class);
    Route::resource('invitation_categories', App\Http\Controllers\Admin\InvitationCategoryController::class);
});
