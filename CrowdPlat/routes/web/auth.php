<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\View\LoginOrCreateController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/login-or-create', [LoginOrCreateController::class, 'index'])->name('login.or.create');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');