<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\DaftarTrialController;
use App\Http\Controllers\DaftarOnlineController;
use App\Http\Controllers\BotManController;

// ==========================================================
// RUTE LOGIN GOOGLE
// ==========================================================
Route::get('/auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

// ==========================================================
// RUTE PUBLIK
// ==========================================================
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ==========================================================
// RUTE UNTUK USER LOGIN
// ==========================================================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');

    // Rute daftar trial
    Route::get('/daftar-trial', [DaftarTrialController::class, 'create'])->name('daftar.trial');
    Route::post('/daftar-trial', [DaftarTrialController::class, 'store'])->name('daftar.trial.store');

    // Rute daftar online
    Route::get('/daftar-online', [DaftarOnlineController::class, 'create'])->name('daftar.online');
    Route::post('/daftar-online', [DaftarOnlineController::class, 'store'])->name('daftar.online.store');
    Route::get('/daftar-online/bukti/{id}', [DaftarOnlineController::class, 'showBukti'])
         ->name('daftar.online.bukti');
});

// Route untuk Chatbot (Letakkan di atas route home)
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
// ==========================================================
// RUTE AUTH
// ==========================================================
require __DIR__.'/auth.php';
