<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');



// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Registration Routes
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/services', function () {
        return view('admin.services.index');
    })->name('services');

    Route::get('/bookings', function () {
        return view('admin.bookings.index');
    })->name('bookings');

    Route::get('/customers', function () {
        return view('admin.customers.index');
    })->name('customers');
});



// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Booking Route
    Route::get('/booking', function () {
        return view('pages.booking');
    })->name('booking');
});
