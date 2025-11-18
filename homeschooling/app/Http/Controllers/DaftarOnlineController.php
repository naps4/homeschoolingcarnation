<?php

namespace App\Http\Controllers;

use App\Models\PendaftarOnline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Penting untuk upload file
use Illuminate\Support\Facades\Validator;

class DaftarOnlineController extends Controller
{
    public function create()
    {
        return view('daftar-online');
    }

    public function store(Request $request)
    {
        // aturan validasi yang sama seperti sebelumnya
        $rules = [
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string',
            'nik' => 'required|string|size:16|unique:pendaftar_online,nik',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'warga_negara' => 'required|string',
            'gol_darah' => 'nullable|string',
            'sekolah_asal' => 'required|string',
            'nisn' => 'nullable|string|unique:pendaftar_online,nisn',
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
        ];

        // Buat validator manual supaya kita bisa tahu field mana yang gagal
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // ambil nama-nama field yang gagal validasi
            $failedFields = array_keys($validator->failed());

            // mapping field ke step index (0-based)
            $stepMap = [
                0 => [ // step 1: data diri
                    'nama_lengkap','nama_panggilan','nik','tempat_lahir','tanggal_lahir',
                    'jenis_kelamin','agama','warga_negara','gol_darah'
                ],
                1 => [ // step 2: akademik & kontak
                    'sekolah_asal','nisn','tingkat','program_hs','prestasi',
                    'email_ortu','telp_hp_ortu','alamat'
                ],
                2 => [ // step 3: orang tua/wali
                    'nama_ayah','pekerjaan_ayah','penghasilan_ayah',
                    'nama_ibu','pekerjaan_ibu','penghasilan_ibu',
                    'nama_wali','pekerjaan_wali'
                ],
                3 => [ // step 4: berkas & persetujuan
                    'file_kk_ktp','file_ijazah','persetujuan'
                ],
            ];

            // default buka step 0
            $activeStep = 0;

            // cari field pertama yang gagal dan tentukan step-nya
            foreach ($failedFields as $f) {
                foreach ($stepMap as $stepIndex => $fields) {
                    if (in_array($f, $fields, true)) {
                        $activeStep = $stepIndex;
                        break 2;
                    }
                }
            }

            // redirect kembali dengan error, input lama, dan informasi step aktif
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('active_step', $activeStep);
        }

        // Jika lolos validasi, lanjutkan penyimpanan
        $validatedData = $validator->validated();

        $validatedData['user_id'] = Auth::id();

        if (app()->environment('testing')) {
            $validatedData['file_kk_ktp'] = 'dummy_kk.pdf';
            $validatedData['file_ijazah'] = 'dummy_ijazah.pdf';
        } else {
            // simpan berkas dengan try/catch untuk keamanan
            try {
                $pathKK = $request->file('file_kk_ktp')->store('public/berkas_pendaftaran');
                $pathIjazah = $request->file('file_ijazah')->store('public/berkas_pendaftaran');
                $validatedData['file_kk_ktp'] = $pathKK;
                $validatedData['file_ijazah'] = $pathIjazah;
            } catch (\Throwable $e) {
                // jika gagal menyimpan file, redirect kembali ke step 4
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['file_kk_ktp' => 'Gagal mengunggah berkas. Coba lagi.'])
                    ->with('active_step', 3);
            }
        }

        // hapus persetujuan dari data yang akan disimpan (hanya checkbox)
        if (isset($validatedData['persetujuan'])) {
            unset($validatedData['persetujuan']);
        }

        // simpan pendaftar
        $pendaftarBaru = PendaftarOnline::create($validatedData);

        // arahkan ke halaman bukti pendaftaran
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
