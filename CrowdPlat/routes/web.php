<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/articles', function () {
    return view('pages.articles.articles-list');
});

Route::get('/articles/read', function () {
    return view('pages.articles.article-read');
});
