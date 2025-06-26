<?php

use Illuminate\Support\Facades\Route;

// Login routes
Route::get('/email', function () {
    return view('login-email');
});

Route::get('/', function () {
    return view('login-email');
});

Route::get('/password', function () {
    return view('login-password');
});

