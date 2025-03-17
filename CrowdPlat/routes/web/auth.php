<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\View\LoginOrCreateController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/login-or-create', [LoginOrCreateController::class, 'index'])->name('login.or.create');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');