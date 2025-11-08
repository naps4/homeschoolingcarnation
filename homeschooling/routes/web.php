<?php

use Illuminate\Support\Facades\Route;
// IMPORT CONTROLLER BARU KITA DI ATAS
use App\Http\Controllers\GoogleLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================================
// RUTE LOGIN GOOGLE
// ==========================================================
Route::get('/auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);


// =----------------------------------------------------------
// (Sisa file routes/web.php Anda...)
// -----------------------------------------------------------

// ==========================================================
// PENGUNJUNG PUBLIK (TIDAK PERLU LOGIN)
// ==========================================================

Route::get('/', function () {
    return view('welcome');
})->name('home');


// ==========================================================
// PENGGUNA YANG SUDAH LOGIN (WAJIB AUTH)
// ==========================================================

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('welcome'); // Diarahkan ke welcome
    })->name('dashboard');

    // Rute untuk Halaman DAFTAR ONLINE
    Route::get('/daftar-online', function () {
        return view('daftar-online');
    })->name('daftar.online');

    // Rute untuk Halaman DAFTAR TRIAL
    Route::get('/daftar-trial', function () {
        return view('daftar-trial');
    })->name('daftar.trial');

});


// ==========================================================
// RUTE BAWAAN AUTH (JANGAN DIHAPUS)
// ==========================================================
require __DIR__.'/auth.php';