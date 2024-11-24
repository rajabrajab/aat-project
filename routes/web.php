<?php

use Illuminate\Support\Facades\Route;
require base_path('routes/admin.php');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dad', function () {
    return view('dass');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
