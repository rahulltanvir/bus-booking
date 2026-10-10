<?php

use Illuminate\Support\Facades\Route;

Route::view('/admin/login', 'admin.auth.login')
    ->name('admin.login');
    Route::get('/', function () {
    return redirect()->route('admin.login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


});
