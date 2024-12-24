<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', function () {
        \Log::info(session('user')); // Log session data
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('barangs', BarangController::class);
    Route::resource('penjualans', PenjualanController::class);
});


