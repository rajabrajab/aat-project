<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['web'])->group(function () {


    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.profile');

    Route::get('/profile', function () {
        return view('admin.profile.index');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.users.index');
    })->name('admin.users');

    Route::get('/invitations', function () {
        return view('admin.invitations.index');
    })->name('admin.invitations');

    Route::get('/payment', function () {
        return view('admin.payment.index');
    })->name('admin.payment');

    Route::get('/contacts', function () {
        return view('admin.contacts.index');
    })->name('admin.contacts');

    Route::get('/packages', function () {
        return view('admin.packages.index');
    })->name('admin.packages');

    Route::get('/packageCategories', function () {
        return view('admin.package_categories.index');
    })->name('admin.packageCategories');

    Route::get('/templates', function () {
        return view('admin.templates.index');
    })->name('admin.templates');



});
