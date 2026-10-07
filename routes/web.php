<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return redirect()->route('buses.index');
});

Route::resource('buses', BusController::class);
Route::resource('routes', RouteController::class);
