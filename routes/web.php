<?php

use Illuminate\Support\Facades\Route;
require base_path('routes/admin.php');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
