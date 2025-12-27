<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

// Authentication Routes (UI only for now)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return "Login Logic Placeholder";
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    return "Register Logic Placeholder";
});
