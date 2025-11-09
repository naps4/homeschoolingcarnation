<?php

namespace App\Http\Controllers;

use App\Models\PendaftarOnline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Penting untuk upload file

class DaftarOnlineController extends Controller
{
    /**
     * Tampilkan formulir daftar online.
     */
    public function create()
    {
        return view('daftar-online');
    }

    /**
     * Simpan data formulir ke database.
     */
   /**
     * Simpan data formulir ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi semua data (sesuaikan dengan kebutuhan Anda)
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string',
            'nik' => 'required|string|size:16|unique:pendaftar_online',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'warga_negara' => 'required|string',
            'gol_darah' => 'nullable|string',
            'sekolah_asal' => 'required|string',
            'nisn' => 'nullable|string|unique:pendaftar_online',
            'tingkat' => 'required|string',
            'program_hs' => 'required|string',
            'prestasi' => 'nullable|string',
            'email_ortu' => 'required|email',
            'telp_hp_ortu' => 'required|string',
            'alamat' => 'required|string',
            'nama_ayah' => 'nullable|string',
            'pekerjaan_ayah' => 'nullable|string',
            'penghasilan_ayah' => 'nullable|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ibu' => 'nullable|string',
            'penghasilan_ibu' => 'nullable|string',
            'nama_wali' => 'nullable|string',
            'pekerjaan_wali' => 'nullable|string',
            'file_kk_ktp' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_ijazah' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'persetujuan' => 'required', // Checkbox persetujuan
        ]);

        // 2. Tambahkan ID pengguna yang sedang login
        $validatedData['user_id'] = Auth::id();

        // 3. Proses Upload File
        // Simpan file ke storage/app/public/berkas_pendaftaran
        $pathKK = $request->file('file_kk_ktp')->store('public/berkas_pendaftaran');
        $pathIjazah = $request->file('file_ijazah')->store('public/berkas_pendaftaran');

        // Simpan path-nya ke data yang akan disimpan
        $validatedData['file_kk_ktp'] = $pathKK;
        $validatedData['file_ijazah'] = $pathIjazah;

        // ===========================================
        // == PERBAIKANNYA ADA DI SINI ==
        // =M=========================================
        // Kita salin data yang sudah divalidasi ke variabel baru
        $dataToCreate = $validatedData;
        
        // Hapus 'persetujuan' dari data yang akan disimpan
        // karena 'persetujuan' tidak ada di tabel database kita.
        unset($dataToCreate['persetujuan']);
        // ===========================================

        // 4. Simpan ke database DAN AMBIL ID-NYA
    $pendaftarBaru = PendaftarOnline::create($dataToCreate);

        // 5. Arahkan ke halaman BUKTI PENDAFTARAN
    //    sambil mengirim ID pendaftar baru
    return redirect()->route('daftar.online.bukti', ['id' => $pendaftarBaru->id]);
    }

    /**
 * Tampilkan halaman bukti pendaftaran yang sudah terisi.
 */
public function showBukti($id)
{
    // 1. Cari pendaftaran di database berdasarkan ID
    $pendaftar = PendaftarOnline::findOrFail($id);

    // 2. [KEAMANAN] Pastikan yang mengakses adalah user yang benar
    if (Auth::id() != $pendaftar->user_id) {
        abort(403, 'Akses Ditolak');
    }

    // 3. Tampilkan view 'cetak-bukti' dan kirim datanya
    return view('cetak-bukti', [
        'pendaftar' => $pendaftar
    ]);
}
}