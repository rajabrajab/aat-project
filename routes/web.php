<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;
require base_path('routes/admin.php');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ProfileController
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile.index');
    Route::post('/profile/update-image', 'updateImage')->name('profile.updateImage');
    Route::post('/profile/update-information', 'updateInformation')->name('profile.updateInformation');
    Route::post('/profile/delete-account', 'deleteAccount')->name('profile.deleteAccount');
});

//InvitationController
Route::controller(InvitationController::class)->group(function () {
    Route::post('/sendFreeInvitation', 'sendFreeInvitation')->name('invitation.sendFree');
    Route::get('/individualInvits', 'IndividualInvitsIndex')->name('invitation.individuals');
    Route::get('/companiesInvits', 'companiesInvitsIndex')->name('invitation.companies');
    Route::get('/invitation/{id}', 'show')->name('invitation.show');
    Route::get('/bookInvitation', 'bookInvitationShow')->name('invitation.book.show');
    Route::post('/bookInvitation', 'bookInvitation')->name('invitation.book');
    Route::get('/sendInvitation', 'sendInvitationShow')->name('invitation.send.show');
    Route::post('/sendIndividualInvitation', 'sendIndividualInvitation')->name('invitation.send.individual');
    Route::post('/sendGroubInvitation', 'sendGroubInvitation')->name('invitation.send.group');
    Route::post('/acceptInvitation/{id}', 'acceptInvitation')->name('invitation.accept');
    Route::post('/rejectInvitation/{id}', 'rejectInvitation')->name('invitation.reject');
    Route::get('/invitationStatistic/{id}', 'InvitationStatistic')->name('invitation.statistic');
    Route::get('/exportInvitation/{id}', 'exportInvitation')->name('invitation.export');
});


//PackageController
Route::controller(PackageController::class)->group(function () {
    Route::get('/packages', 'index')->name('packages.index');
    Route::post('/packages/change', 'changeChosenPackage')->name('packages.change');
    Route::post('/packages/increase-invitees', 'increasePackageInvitessNumber')->name('packages.increaseInvitees');
    Route::post('/packages/cancel', 'cancelChosenPackage')->name('packages.cancel');
    Route::get('/packages/book', 'bookPackageShow')->name('packages.book.show');
    Route::post('/packages/book', 'bookPackage')->name('packages.book');
});

//StatisticsController

Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');
