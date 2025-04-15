<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserController::class, 'create'])->name('user.create');
Route::post('/profile', [UserController::class, 'store'])->name('user.store');
