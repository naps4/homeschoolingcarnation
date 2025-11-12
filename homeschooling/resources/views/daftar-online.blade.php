@extends('layouts.main')

@section('title', 'Formulir Pendaftaran Online')

@section('content')
    <div class="form-container">
        <div class="form-header">
            <a href="{{ route('home') }}" class="back-link">&lt; Kembali</a>
            <h2>FORMULIR PENDAFTARAN</h2>
            <p>HOMESCHOOLING CARNATION CIREBON</p>
        </div>

        <div class="progress-bar">
            <div class="progress-step active" data-step="1">
                <div class="step-number">1</div>
                <span>Data Diri</span>
            </div>
            <div class="progress-step" data-step="2">
                <div class="step-number">2</div>
                <span>Akademik & Kontak</span>
            </div>
            <div class="progress-step" data-step="3">
                <div class="step-number">3</div>
                <span>Orang Tua / Wali</span>
            </div>
            <div class="progress-step" data-step="4">
                <div class="step-number">4</div>
                <span>Berkas & Kirim</span>
            </div>
        </div>

        <form id="multiStepForm" action="{{ route('daftar.online.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-step active" id="step-1">
                <h3>Langkah 1: Data Diri Siswa</h3>
                
                <div class="input-group">
                    <label for="nama_lengkap">Nama Lengkap (Sesuai Akta)</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
                    @error('nama_lengkap') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" id="nama_panggilan" name="nama_panggilan" value="{{ old('nama_panggilan') }}">
                    </div>
                    <div class="input-group">
                        <label for="nik">NIK (Sesuai KK)</label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik') }}" required>
                        @error('nik') <div class="error-message">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">- Pilih -</option>
                            <option value="Laki-laki" @if(old('jenis_kelamin') == 'Laki-laki') selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if(old('jenis_kelamin') == 'Perempuan') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="agama">Agama</label>
                        <select id="agama" name="agama" required>
                            <option value="">- Pilih -</option>
                            <option value="Islam" @if(old('agama') == 'Islam') selected @endif>Islam</option>
                            <option value="Kristen" @if(old('agama') == 'Kristen') selected @endif>Kristen</option>
                            <option value="Katolik" @if(old('agama') == 'Katolik') selected @endif>Katolik</option>
                            <option value="Hindu" @if(old('agama') == 'Hindu') selected @endif>Hindu</option>
                            <option value="Buddha" @if(old('agama') == 'Buddha') selected @endif>Buddha</option>
                            <option value="Konghucu" @if(old('agama') == 'Konghucu') selected @endif>Konghucu</option>
                            <option value="Kepercayaan" @if(old('agama') == 'Kepercayaan') selected @endif>Kepercayaan thd TuhanYME</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="warga_negara">Warga Negara</label>
                        <select id="warga_negara" name="warga_negara" required>
                            <option value="">- Pilih -</option>
                            <option value="WNI" @if(old('warga_negara') == 'WNI') selected @endif>WNI</option>
                            <option value="WNA" @if(old('warga_negara') == 'WNA') selected @endif>WNA</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="gol_darah">Golongan Darah</label>
                        <select id="gol_darah" name="gol_darah">
                            <option value="">- Pilih (Opsional) -</option>
                            <option value="A" @if(old('gol_darah') == 'A') selected @endif>A</option>
                            <option value="B" @if(old('gol_darah') == 'B') selected @endif>B</option>
                            <option value="AB" @if(old('gol_darah') == 'AB') selected @endif>AB</option>
                            <option value="O" @if(old('gol_darah') == 'O') selected @endif>O</option>
                        </select>
                    </div>
                </div>
                
                <div class="button-group" style="justify-content: flex-end;">
                    <button type="button" class="btn btn-next" data-step="next">Selanjutnya</button>
                </div>
            </div>

            <div class="form-step" id="step-2">
                <h3>Langkah 2: Akademik & Kontak</h3>

                <div class="form-row">
                    <div class="input-group">
                        <label for="sekolah_asal">Sekolah Asal</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" value="{{ old('sekolah_asal') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="nisn">NISN</label>
                        <input type="text" id="nisn" name="nisn" value="{{ old('nisn') }}">
                        @error('nisn') <div class="error-message">{{ $message }}</div> @enderror
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="tingkat">Tingkat (Pendidikan Terakhir)</label>
                        <input type="text" id="tingkat" name="tingkat" placeholder="Mis: Kelas 5 SD, Kelas 10 SMA" value="{{ old('tingkat') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="program_hs">Program Homeschooling</label>
                        <select id="program_hs" name="program_hs" required>
                            <option value="">- Pilih Program -</option>
                            <option value="SaC" @if(old('program_hs') == 'SaC') selected @endif>Belajar di Sekolah (SaC)</option>
                            <option value="LoS" @if(old('program_hs') == 'LoS') selected @endif>Belajar di Rumah (LoS)</option>
                        </select>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="prestasi">Prestasi Belajar (Opsional)</label>
                    <textarea id="prestasi" name="prestasi" rows="3" placeholder="Contoh: Juara 1 Lomba Cerdas Cermat">{{ old('prestasi') }}</textarea>
                </div>
                
                <hr style="margin: 1.5rem 0; border: 1px solid #f0f0f0;">
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="email_ortu">Email (Orang Tua / Wali)</label>
                        <input type="email" id="email_ortu" name="email_ortu" value="{{ old('email_ortu') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="telp_hp_ortu">Telp./HP (WhatsApp)</label>
                        <input type="tel" id="telp_hp_ortu" name="telp_hp_ortu" value="{{ old('telp_hp_ortu') }}" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="alamat">Alamat Lengkap Domisili</label>
                    <textarea id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" data-step="prev">Sebelumnya</button>
                    <button type="button" class="btn btn-next" data-step="next">Selanjutnya</button>
                </div>
            </div>

            <div class="form-step" id="step-3">
                <h3>Langkah 3: Data Orang Tua / Wali</h3>
                
                <h4>Data Ayah</h4>
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" value="{{ old('nama_ayah') }}">
                    </div>
                    <div class="input-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                    </div>
                </div>
                <div class="input-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah</label>
                    <select id="penghasilan_ayah" name="penghasilan_ayah">
                        <option value="">- Pilih -</option>
                        <option value="<500rb" @if(old('penghasilan_ayah') == '<500rb') selected @endif>&lt;Rp. 500.000</option>
                        <option value="500rb-1jt" @if(old('penghasilan_ayah') == '500rb-1jt') selected @endif>Rp. 500.000 - Rp. 999.999</option>
                        <option value="1jt-2jt" @if(old('penghasilan_ayah') == '1jt-2jt') selected @endif>Rp. 1.000.000 - Rp. 1.999.999</option>
                        <option value="2jt-5jt" @if(old('penghasilan_ayah') == '2jt-5jt') selected @endif>Rp. 2.000.000 - Rp. 4.999.999</option>
                        <option value="5jt-20jt" @if(old('penghasilan_ayah') == '5jt-20jt') selected @endif>Rp. 5.000.000 - Rp. 20.000.000</option>
                        <option value=">20jt" @if(old('penghasilan_ayah') == '>20jt') selected @endif>&gt;Rp. 20.000.000</option>
                        <option value="Tidak Berpenghasilan" @if(old('penghasilan_ayah') == 'Tidak Berpenghasilan') selected @endif>Tidak Berpenghasilan</option>
                    </select>
                </div>

                <hr style="margin: 1.5rem 0; border: 1px solid #f0f0f0;">
                
                <h4>Data Ibu</h4>
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                    </div>
                </div>
                <div class="input-group">
                    <label for="penghasilan_ibu">Penghasilan Ibu</label>
                    <select id="penghasilan_ibu" name="penghasilan_ibu">
                        <option value="">- Pilih -</option>
                        <option value="<500rb" @if(old('penghasilan_ibu') == '<500rb') selected @endif>&lt;Rp. 500.000</option>
                        <option value="500rb-1jt" @if(old('penghasilan_ibu') == '500rb-1jt') selected @endif>Rp. 500.000 - Rp. 999.999</option>
                        <option value="1jt-2jt" @if(old('penghasilan_ibu') == '1jt-2jt') selected @endif>Rp. 1.000.000 - Rp. 1.999.999</option>
                        <option value="2jt-5jt" @if(old('penghasilan_ibu') == '2jt-5jt') selected @endif>Rp. 2.000.000 - Rp. 4.999.999</option>
                        <option value="5jt-20jt" @if(old('penghasilan_ibu') == '5jt-20jt') selected @endif>Rp. 5.000.000 - Rp. 20.000.000</option>
                        <option value=">20jt" @if(old('penghasilan_ibu') == '>20jt') selected @endif>&gt;Rp. 20.000.000</option>
                        <option value="Tidak Berpenghasilan" @if(old('penghasilan_ibu') == 'Tidak Berpenghasilan') selected @endif>Tidak Berpenghasilan</option>
                    </select>
                </div>
                
                <hr style="margin: 1.5rem 0; border: 1px solid #f0f0f0;">

                <h4>Data Wali (Isi jika tinggal dengan Wali)</h4>
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_wali">Nama Wali</label>
                        <input type="text" id="nama_wali" name="nama_wali" value="{{ old('nama_wali') }}">
                    </div>
                    <div class="input-group">
                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                        <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" value="{{ old('pekerjaan_wali') }}">
                    </div>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" data-step="prev">Sebelumnya</button>
                    <button type="button" class="btn btn-next" data-step="next">Selanjutnya</button>
                </div>
            </div>

            <div class="form-step" id="step-4">
                <h3>Langkah 4: Unggah Berkas & Konfirmasi</h3>
                
                <div class="input-group">
                    <label for="file_kk_ktp">Upload KK / KTP (PDF, JPG, PNG)</label>
                    <input type="file" id="file_kk_ktp" name="file_kk_ktp" accept=".pdf,.jpg,.jpeg,.png" required>
                    @error('file_kk_ktp')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="input-group">
                    <label for="file_ijazah">Upload Ijazah / SKHUN Terakhir (PDF, JPG, PNG)</label>
                    <input type="file" id="file_ijazah" name="file_ijazah" accept=".pdf,.jpg,.jpeg,.png" required>
                    @error('file_ijazah')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="consent-group">
                    <input type="checkbox" id="persetujuan" name="persetujuan" required>
                    <label for="persetujuan">
                        Saya bertanggung jawab atas Data yang Saya kirimkan adalah Benar.
                    </label>
                </div>
                @error('persetujuan')
                    <div class="error-message" style="margin-top: -1rem; margin-bottom: 1rem;">Anda harus menyetujui pernyataan ini.</div>
                @enderror

                <div class="button-group">
                    <button type="button" class="btn btn-prev" data-step="prev">Sebelumnya</button>
                    <button type="submit" class="btn btn-submit">Kirim Pendaftaran</button>
                </div>
            </div>
            
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const formSteps = document.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            const nextButtons = document.querySelectorAll('.btn-next');
            const prevButtons = document.querySelectorAll('.btn-prev');
            
            let currentStep = 0; 

            // Ini adalah untuk menangani jika ada error validasi
            // Laravel akan mengarahkan kembali ke halaman. Kita harus
            // memastikan kita kembali ke langkah yang benar.
            // Untuk sekarang, kita mulai dari langkah 0.
            // (Logika ini bisa dibuat lebih canggih nanti)
            showStep(0);

            function showStep(stepIndex) {
                formSteps.forEach((step, index) => {
                    step.classList.toggle('active', index === stepIndex);
                });
                
                progressSteps.forEach((step, index) => {
                    // Tandai semua langkah sampai langkah saat ini sebagai aktif
                    if (index <= stepIndex) {
                        step.classList.add('active');
                    } else {
                        step.classList.remove('active');
                    }
                });
                
                currentStep = stepIndex;
            }

            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (currentStep < formSteps.length - 1) {
                        showStep(currentStep + 1);
                    }
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (currentStep > 0) {
                        showStep(currentStep - 1);
                    }
                });
            });
        });
    </script>
@endsection