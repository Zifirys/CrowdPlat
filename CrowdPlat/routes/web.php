<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/test', function () {
    return view('pages.tests.tests-list');
});

Route::get('/test/create', function () {
    return view('pages.tests.tests-create');
});


