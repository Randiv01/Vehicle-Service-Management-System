<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

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
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Services CRUD
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    Route::post('/services', [AdminController::class, 'storeService'])->name('services.store');
    Route::put('/services/{service}', [AdminController::class, 'updateService'])->name('services.update');
    Route::delete('/services/{service}', [AdminController::class, 'deleteService'])->name('services.delete');
    
    // Bookings
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
    Route::post('/bookings/create', [AdminController::class, 'createBooking'])->name('bookings.create');
    Route::put('/bookings/{booking}/status', [AdminController::class, 'updateBookingStatus'])->name('bookings.updateStatus');
    
    // Customers
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers');
    Route::post('/customers/create', [AdminController::class, 'createCustomer'])->name('customers.create');
    Route::put('/customers/{customer}', [AdminController::class, 'updateCustomer'])->name('customers.update');
    Route::delete('/customers/{customer}', [AdminController::class, 'deleteCustomer'])->name('customers.delete');

    // Admins
    Route::get('/admins', [AdminController::class, 'admins'])->name('admins');
    Route::post('/admins/create', [AdminController::class, 'createAdmin'])->name('admins.create');
    Route::put('/admins/{admin}', [AdminController::class, 'updateAdmin'])->name('admins.update');
    Route::delete('/admins/{admin}', [AdminController::class, 'deleteAdmin'])->name('admins.delete');
});

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Booking Routes
    Route::get('/booking', function () {
        return view('pages.booking');
    })->name('booking');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
});
