<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\View\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

require __DIR__ . '/web/auth.php';

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.list');
Route::get('/articles/form', [ArticleController::class, 'edit'])->name('article.edit');
Route::get('/articles/{id}', [ArticleController::class, 'read'])->name('article.read');
