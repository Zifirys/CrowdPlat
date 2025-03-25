<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\View\LoginOrCreateController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/login-or-create', [LoginOrCreateController::class, 'index'])->name('login.or.create');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

Route::get('/email/verify', function () {
    return view('mail.verification');
})->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('home')->with('success', 'Email подтверждён!');
})->middleware(['auth', 'signed'])->name('verification.verify');


//// Маршрут для повторной отправки письма с подтверждением email
//Route::post('/email/verification-notification', function (Request $request) {
//    $request->user()->sendEmailVerificationNotification();
//
//    return back()->with('message', 'Ссылка для подтверждения отправлена!');
//})->middleware(['auth', 'throttle:6,1'])->name('verification.send');






//Route::post('/logout', function (Request $request) {
//    auth()->logout();
//    $request->session()->invalidate();
//    $request->session()->regenerateToken();
//
//    return redirect('/')->with('success', 'Вы вышли из системы.');
//})->name('logout');
