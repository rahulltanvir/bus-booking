<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

// Admin Login
// Route::get('/admin', function () {
//     return redirect()->route('admin.login');
// });

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

// Protected Admin Panel
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard.index');
        })->name('dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
