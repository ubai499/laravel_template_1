<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Role Admin Controller 
use App\Http\Controllers\Admin\DashboardController;
// Role Customer Controller 
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;


Route::get('/', function () {
    return view('welcome');
})->name('home');
Auth::routes();

Route::get('/dashboard', function () {
    if (Auth::user()->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::user()->hasRole('customer')) {
        return redirect()->route('customer.dashboard');
    } else {
        return redirect()->route('dashboard');
    }
})->name('dashboard');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware(['auth', 'role:customer'])->prefix('customer')->name('customer.')->group(function () {
    Route::get('/dashboard', [CustomerDashboardController::class, 'index'])->name('dashboard');
});
