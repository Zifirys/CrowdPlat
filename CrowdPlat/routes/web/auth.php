<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\View\LoginOrCreateController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfilController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/login-or-create', [LoginOrCreateController::class, 'index'])->name('login.or.create');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::post('/profil/upload', [ProfilController::class, 'upload'])->name('profil.upload');
});


Route::get('/email/verify', function () {
    return view('mail.verification');
})->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('home')->with('success', 'Email подтверждён!');
})->middleware(['auth', 'signed'])->name('verification.verify');

// повторная отправки письма с подтверждением email
//Route::post('/email/verification-notification', function (Request $request) {
//    $request->user()->sendEmailVerificationNotification();
//
//    return back()->with('message', 'Ссылка для подтверждения отправлена!');
//})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
