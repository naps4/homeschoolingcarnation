<?php

namespace App\Http\Controllers;

use App\Models\PendaftarTrial; // <-- Impor model kita
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- Impor untuk mengambil ID user

class DaftarTrialController extends Controller
{
    /**
     * Tampilkan halaman formulir daftar trial.
     */
    public function create()
    {
        // Cukup tampilkan view-nya
        return view('daftar-trial');
    }

    /**
     * Simpan data formulir ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi data (wajib)
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string|max:100',
            'jenis_kelamin' => 'required|string',
            'asal_sekolah' => 'required|string|max:255',
            'dari_kelas' => 'required|string',
            'nama_orangtua' => 'required|string|max:255',
            'telp_hp_ortu' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        // 2. Tambahkan ID pengguna yang sedang login
        $validatedData['user_id'] = Auth::id();

        // 3. Simpan ke database
        PendaftarTrial::create($validatedData);

        // 4. Arahkan kembali ke Halaman Utama dengan pesan sukses
        return redirect()->route('home')->with('status', 'Pendaftaran trial Anda telah berhasil dikirim!');
    }
}