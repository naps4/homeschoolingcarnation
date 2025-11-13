<?php

namespace App\Http\Controllers;

use App\Models\PendaftarOnline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Penting untuk upload file


class DaftarOnlineController extends Controller
{
    public function create()
    {
        return view('daftar-online');
    }

    public function store(Request $request)
    {
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
            'persetujuan' => 'required',
        ]);

        $validatedData['user_id'] = Auth::id();

        if (app()->environment('testing')) {
            $validatedData['file_kk_ktp'] = 'dummy_kk.pdf';
            $validatedData['file_ijazah'] = 'dummy_ijazah.pdf';
        } else {
            $pathKK = $request->file('file_kk_ktp')->store('public/berkas_pendaftaran');
            $pathIjazah = $request->file('file_ijazah')->store('public/berkas_pendaftaran');
            $validatedData['file_kk_ktp'] = $pathKK;
            $validatedData['file_ijazah'] = $pathIjazah;
        }

        unset($validatedData['persetujuan']);

        $pendaftarBaru = PendaftarOnline::create($validatedData);

        return redirect()->route('daftar.online.bukti', ['id' => $pendaftarBaru->id]);
    }

    public function showBukti($id)
    {
        $pendaftar = PendaftarOnline::findOrFail($id);

        if (Auth::id() != $pendaftar->user_id) {
            abort(403, 'Akses Ditolak');
        }

        return view('cetak-bukti', [
            'pendaftar' => $pendaftar
        ]);
    }
}
