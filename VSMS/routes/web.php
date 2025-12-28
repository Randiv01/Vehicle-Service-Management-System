<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

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
