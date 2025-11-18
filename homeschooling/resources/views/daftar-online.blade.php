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
        <div class="progress-step active"><div class="step-number">1</div><span>Data Diri</span></div>
        <div class="progress-step"><div class="step-number">2</div><span>Akademik & Kontak</span></div>
        <div class="progress-step"><div class="step-number">3</div><span>Orang Tua / Wali</span></div>
        <div class="progress-step"><div class="step-number">4</div><span>Berkas & Kirim</span></div>
    </div>

    <form id="multiStepForm" action="{{ route('daftar.online.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- STEP 1 --}}
        <div class="form-step active">
            <h3>Langkah 1: Data Diri Siswa</h3>

            <div class="input-group">
                <label for="nama_lengkap">Nama Lengkap (Sesuai Akta)</label>
                <input id="nama_lengkap" type="text" name="nama_lengkap"
                    value="{{ old('nama_lengkap') }}"
                    required
                    pattern="^[A-Za-z\s]+$"
                    title="Nama hanya boleh berisi huruf dan spasi">
                @error('nama_lengkap') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input id="nama_panggilan" type="text" name="nama_panggilan"
                        value="{{ old('nama_panggilan') }}"
                        pattern="^[A-Za-z\s]*$"
                        title="Nama panggilan hanya huruf dan spasi jika diisi">
                </div>

                <div class="input-group">
                    <label for="nik">NIK (Sesuai KK)</label>
                    <input id="nik" type="text" name="nik"
                        value="{{ old('nik') }}"
                        required
                        inputmode="numeric"
                        pattern="^\d{16}$"
                        maxlength="16"
                        title="NIK harus 16 digit angka">
                    @error('nik') <div class="error-message">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input id="tempat_lahir" type="text" name="tempat_lahir"
                        value="{{ old('tempat_lahir') }}"
                        required
                        pattern="^[A-Za-z\s]+$"
                        title="Tempat lahir hanya boleh huruf dan spasi">
                </div>

                <div class="input-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input id="tanggal_lahir" type="date" name="tanggal_lahir"
                        value="{{ old('tanggal_lahir') }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">- Pilih -</option>
                        <option value="Laki-laki" @selected(old('jenis_kelamin')=='Laki-laki')>Laki-laki</option>
                        <option value="Perempuan" @selected(old('jenis_kelamin')=='Perempuan')>Perempuan</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="">- Pilih -</option>
                        <option value="Islam" @selected(old('agama')=='Islam')>Islam</option>
                        <option value="Kristen" @selected(old('agama')=='Kristen')>Kristen</option>
                        <option value="Katolik" @selected(old('agama')=='Katolik')>Katolik</option>
                        <option value="Hindu" @selected(old('agama')=='Hindu')>Hindu</option>
                        <option value="Buddha" @selected(old('agama')=='Buddha')>Buddha</option>
                        <option value="Konghucu" @selected(old('agama')=='Konghucu')>Konghucu</option>
                        <option value="Kepercayaan" @selected(old('agama')=='Kepercayaan')>Kepercayaan thd Tuhan YME</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="warga_negara">Warga Negara</label>
                    <select id="warga_negara" name="warga_negara" required>
                        <option value="">- Pilih -</option>
                        <option value="WNI" @selected(old('warga_negara')=='WNI')>WNI</option>
                        <option value="WNA" @selected(old('warga_negara')=='WNA')>WNA</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="gol_darah">Golongan Darah</label>
                    <select id="gol_darah" name="gol_darah">
                        <option value="">- Pilih (Opsional) -</option>
                        <option value="A" @selected(old('gol_darah')=='A')>A</option>
                        <option value="B" @selected(old('gol_darah')=='B')>B</option>
                        <option value="AB" @selected(old('gol_darah')=='AB')>AB</option>
                        <option value="O" @selected(old('gol_darah')=='O')>O</option>
                    </select>
                </div>
            </div>

            <div class="button-group" style="justify-content: flex-end;">
                <button type="button" class="btn btn-next">Selanjutnya</button>
            </div>
        </div>

        {{-- STEP 2 --}}
        <div class="form-step">
            <h3>Langkah 2: Akademik & Kontak</h3>

            <div class="form-row">
                <div class="input-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input id="sekolah_asal" type="text" name="sekolah_asal" value="{{ old('sekolah_asal') }}" required>
                </div>

                <div class="input-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="text" name="nisn" value="{{ old('nisn') }}"
                        inputmode="numeric"
                        pattern="^\d*$"
                        title="NISN harus angka (jika diisi)">
                    @error('nisn') <div class="error-message">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="tingkat">Tingkat (Pendidikan Terakhir)</label>
                    <input id="tingkat" type="text" name="tingkat" value="{{ old('tingkat') }}" required>
                </div>

                <div class="input-group">
                    <label for="program_hs">Program Homeschooling</label>
                    <select id="program_hs" name="program_hs" required>
                        <option value="">- Pilih Program -</option>
                        <option value="SaC" @selected(old('program_hs')=='SaC')>Belajar di Sekolah (SaC)</option>
                        <option value="LoS" @selected(old('program_hs')=='LoS')>Belajar di Rumah (LoS)</option>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <label for="prestasi">Prestasi Belajar (Opsional)</label>
                <textarea id="prestasi" name="prestasi" rows="3">{{ old('prestasi') }}</textarea>
            </div>

            <hr style="margin:1.5rem 0; border:1px solid #f0f0f0;">

            <div class="form-row">
                <div class="input-group">
                    <label for="email_ortu">Email (Orang Tua / Wali)</label>
                    <input id="email_ortu" type="email" name="email_ortu" value="{{ old('email_ortu') }}" required>
                </div>

                <div class="input-group">
                    <label for="telp_hp_ortu">Telp./HP (WhatsApp)</label>
                    <input id="telp_hp_ortu" type="tel" name="telp_hp_ortu" value="{{ old('telp_hp_ortu') }}" required
                        inputmode="tel" pattern="^\d{10,15}$" maxlength="15" title="Nomor telepon harus 10-15 digit angka">
                </div>
            </div>

            <div class="input-group">
                <label for="alamat">Alamat Lengkap Domisili</label>
                <textarea id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
            </div>

            <div class="button-group">
                <button type="button" class="btn btn-prev">Sebelumnya</button>
                <button type="button" class="btn btn-next">Selanjutnya</button>
            </div>
        </div>

        {{-- STEP 3 --}}
        <div class="form-step">
            <h3>Langkah 3: Data Orang Tua / Wali</h3>

            <h4>Data Ayah</h4>
            <div class="form-row">
                <div class="input-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input id="nama_ayah" type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" pattern="^[A-Za-z\s]*$" title="Nama hanya huruf dan spasi jika diisi">
                </div>
                <div class="input-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                    <input id="pekerjaan_ayah" type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                </div>
            </div>

            <h4>Data Ibu</h4>
            <div class="form-row">
                <div class="input-group">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input id="nama_ibu" type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" required pattern="^[A-Za-z\s]+$" title="Nama ibu hanya huruf dan spasi">
                    @error('nama_ibu') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                <div class="input-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                    <input id="pekerjaan_ibu" type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                </div>
            </div>

            <h4>Data Wali</h4>
            <div class="form-row">
                <div class="input-group">
                    <label for="nama_wali">Nama Wali</label>
                    <input id="nama_wali" type="text" name="nama_wali" value="{{ old('nama_wali') }}" pattern="^[A-Za-z\s]*$" title="Nama wali hanya huruf dan spasi jika diisi">
                </div>
                <div class="input-group">
                    <label for="pekerjaan_wali">Pekerjaan Wali</label>
                    <input id="pekerjaan_wali" type="text" name="pekerjaan_wali" value="{{ old('pekerjaan_wali') }}">
                </div>
            </div>

            <div class="button-group">
                <button type="button" class="btn btn-prev">Sebelumnya</button>
                <button type="button" class="btn btn-next">Selanjutnya</button>
            </div>
        </div>

        {{-- STEP 4 --}}
        <div class="form-step">
            <h3>Langkah 4: Unggah Berkas & Konfirmasi</h3>

            <div class="input-group">
                <label for="file_kk_ktp">Upload KK / KTP (PDF, JPG, PNG)</label>
                <input id="file_kk_ktp" type="file" name="file_kk_ktp" accept=".pdf,.jpg,.jpeg,.png" required>
                @error('file_kk_ktp') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="input-group">
                <label for="file_ijazah">Upload Ijazah / SKHUN Terakhir (PDF, JPG, PNG)</label>
                <input id="file_ijazah" type="file" name="file_ijazah" accept=".pdf,.jpg,.jpeg,.png" required>
                @error('file_ijazah') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="consent-group">
                <input id="persetujuan" type="checkbox" name="persetujuan" required>
                <label for="persetujuan">Saya bertanggung jawab atas Data yang Saya kirimkan adalah Benar.</label>
            </div>
            @error('persetujuan') <div class="error-message">Anda harus menyetujui pernyataan ini.</div> @enderror

            <div class="button-group">
                <button type="button" class="btn btn-prev">Sebelumnya</button>
                <button type="submit" class="btn btn-submit">Kirim Pendaftaran</button>
            </div>
        </div>

    </form>
</div>

<style>
    .btn-next.disabled, .btn-next[disabled] {
        opacity: .5; cursor: not-allowed; pointer-events: none;
    }
    .input-error {
        border-color: #d32f2f !important;
    }
    .client-error {
        color: #d32f2f; font-size: .82rem; margin-top: 4px;
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const steps = document.querySelectorAll(".form-step");
    const nextButtons = document.querySelectorAll(".btn-next");
    const prevButtons = document.querySelectorAll(".btn-prev");
    const progressSteps = document.querySelectorAll(".progress-step");

    let currentStep = 0;

    function showStep(i) {
        steps.forEach((s, idx) => s.classList.toggle("active", idx === i));
        progressSteps.forEach((p, idx) => p.classList.toggle("active", idx <= i));
        currentStep = i;
    }

    function addClientError(input, message) {
        input.classList.add("input-error");
        const next = input.nextElementSibling;
        if (!next || !next.classList.contains("client-error")) {
            const err = document.createElement("div");
            err.className = "client-error";
            err.innerText = message;
            input.parentNode.appendChild(err);
        }
    }

    function removeClientError(input) {
        input.classList.remove("input-error");
        if (input.nextElementSibling && input.nextElementSibling.classList.contains("client-error")) {
            input.nextElementSibling.remove();
        }
    }

    // Custom validation rules (name/place: letters+space; numbers: digits)
    const rules = {
        'nama_lengkap': {
            test: function(v){ return !!v && /^[A-Za-z\s]+$/.test(v.trim()); },
            message: "Nama hanya boleh berisi huruf dan spasi."
        },
        'nama_panggilan': {
            test: function(v){ return !v || /^[A-Za-z\s]+$/.test(v.trim()); },
            message: "Nama panggilan hanya huruf dan spasi jika diisi."
        },
        'tempat_lahir': {
            test: function(v){ return !!v && /^[A-Za-z\s]+$/.test(v.trim()); },
            message: "Tempat lahir hanya boleh huruf dan spasi."
        },
        'nama_ayah': {
            test: function(v){ return !v || /^[A-Za-z\s]+$/.test(v.trim()); },
            message: "Nama ayah hanya huruf dan spasi jika diisi."
        },
        'nama_ibu': {
            test: function(v){ return !!v && /^[A-Za-z\s]+$/.test(v.trim()); },
            message: "Nama ibu hanya huruf dan spasi."
        },
        'nama_wali': {
            test: function(v){ return !v || /^[A-Za-z\s]+$/.test(v.trim()); },
            message: "Nama wali hanya huruf dan spasi jika diisi."
        },
        'nik': {
            test: function(v){ return !!v && /^\d{16}$/.test(v.trim()); },
            message: "NIK harus 16 digit angka."
        },
        'telp_hp_ortu': {
            test: function(v){ return !!v && /^\d{10,15}$/.test(v.trim()); },
            message: "Nomor telepon harus 10-15 digit angka."
        },
        'nisn': {
            test: function(v){ return !v || /^\d+$/.test(v.trim()); },
            message: "NISN harus angka jika diisi."
        }
    };

    function validateStep(stepIndex) {
        const inputs = steps[stepIndex].querySelectorAll("input, select, textarea");
        let valid = true;

        inputs.forEach(function(input){
            removeClientError(input);

            // HTML required
            if (input.hasAttribute('required') && !String(input.value || '').trim()) {
                valid = false;
                addClientError(input, "Field ini wajib diisi.");
                return;
            }

            // custom rules by name
            const name = input.getAttribute('name');
            if (name && rules[name]) {
                const ok = rules[name].test(input.value || '');
                if (!ok) {
                    valid = false;
                    addClientError(input, rules[name].message);
                    return;
                }
            }

            // email type built-in validation
            if (input.type === 'email' && input.value) {
                if (!input.checkValidity()) {
                    valid = false;
                    addClientError(input, "Masukkan email yang valid.");
                }
            }

            // file required
            if (input.type === 'file' && input.hasAttribute('required')) {
                if (!input.files || input.files.length === 0) {
                    valid = false;
                    addClientError(input, "Anda harus mengunggah file.");
                }
            }
        });

        return valid;
    }

    nextButtons.forEach(function(btn){
        btn.addEventListener('click', function(){
            if (!validateStep(currentStep)) {
                const firstErr = document.querySelector('.input-error');
                if (firstErr) firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return;
            }
            if (currentStep < steps.length - 1) showStep(currentStep + 1);
        });
    });

    prevButtons.forEach(function(btn){
        btn.addEventListener('click', function(){
            if (currentStep > 0) showStep(currentStep - 1);
        });
    });

    // restore server-provided active step (jika ada)
    const initialStep = {!! json_encode(session('active_step', 0)) !!};
    showStep(initialStep);

    // highlight server-side errors (jika ada)
    const serverErrors = {!! json_encode($errors->keys() ?? []) !!};
    if (Array.isArray(serverErrors) && serverErrors.length > 0) {
        serverErrors.forEach(function(name){
            const inp = document.querySelector('[name="'+name+'"]');
            if (inp) addClientError(inp, "Silakan perbaiki field ini.");
        });

        // buka step yang berisi error pertama
        const first = serverErrors[0];
        for (let i = 0; i < steps.length; i++) {
            if (steps[i].querySelector('[name="'+first+'"]')) {
                showStep(i);
                break;
            }
        }
    }

});
</script>

@endsection
