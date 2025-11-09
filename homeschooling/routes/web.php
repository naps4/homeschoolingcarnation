<?php

use Illuminate\Support\Facades\Route;
// IMPORT CONTROLLER BARU KITA DI ATAS
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\DaftarTrialController;
use App\Http\Controllers\DaftarOnlineController;

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


// PENGGUNA YANG SUDAH LOGIN (WAJIB AUTH)
// ==========================================================
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');

    // ===========================================
    // == PERUBAHAN UNTUK DAFTAR ONLINE ==
    // ===========================================
    // GET: Menampilkan formulir
    Route::get('/daftar-online', [DaftarOnlineController::class, 'create'])->name('daftar.online');
    
    // POST: Menyimpan formulir
    Route::post('/daftar-online', [DaftarOnlineController::class, 'store']);
    // ===========================================


    // Rute Daftar Trial (biarkan)
    Route::get('/daftar-trial', [DaftarTrialController::class, 'create'])->name('daftar.trial');
    Route::post('/daftar-trial', [DaftarTrialController::class, 'store']);

});

Route::middleware(['auth'])->group(function () {

    // ... (route dashboard dan daftar-trial Anda) ...

    // GET: Menampilkan formulir
    Route::get('/daftar-online', [DaftarOnlineController::class, 'create'])->name('daftar.online');

    // POST: Menyimpan formulir
    Route::post('/daftar-online', [DaftarOnlineController::class, 'store']); // <-- JANGAN UBAH INI

    // ===========================================
    // == TAMBAHKAN ROUTE BARU INI ==
    // ===========================================
    // GET: Menampilkan halaman "Bukti Pendaftaran"
    Route::get('/daftar-online/bukti/{id}', [DaftarOnlineController::class, 'showBukti'])
         ->name('daftar.online.bukti');
    // ===========================================

});

// ==========================================================
// RUTE BAWAAN AUTH (JANGAN DIHAPUS)
// ==========================================================
require __DIR__.'/auth.php';