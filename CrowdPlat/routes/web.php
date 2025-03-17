<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\View\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

require __DIR__ . '/web/auth.php';

