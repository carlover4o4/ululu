<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check())
        {
            return Auth::user()->role === 'admin' ? redirect()->route('admin.dashboard')
            : redirect()->route('rooms.index');
        }

        return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');
    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.store');

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');
});

Route::post('/logout', [AuthController::class, 'logout'])
        ->middleware('auth')
        ->name('logout');

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::view('/rooms', 'rooms.index')
        ->name('rooms.index');
});

// Halaman admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin', 'admin.dashboard')
        ->name('admin.dashboard');
});