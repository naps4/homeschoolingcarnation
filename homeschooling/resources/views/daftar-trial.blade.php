@extends('layouts.main')

@section('title', 'Formulir Daftar Trial')

@section('content')
<div class="form-container">
    <div class="form-header trial">
        <a href="{{ route('home') }}" class="back-link">&lt; Kembali</a>
        <h2>FORMULIR DAFTAR TRIAL</h2>
        <p>HOMESCHOOLING CARNATION CIREBON</p>
    </div>

    <div class="progress-bar">
        <div class="progress-step trial active" data-step="1">
            <div class="step-number">1</div>
            <span>Data Siswa</span>
        </div>
        <div class="progress-step trial" data-step="2">
            <div class="step-number">2</div>
            <span>Data Ortu & Kontak</span>
        </div>
    </div>

    {{-- Jika ada pesan status (sukses) --}}
    @if(session('status'))
        <div class="alert-success" role="status" style="margin: .8rem 0; padding: .6rem; background:#e6ffed; border:1px solid #b7f0c9;">
            {{ session('status') }}
        </div>
    @endif

    <form id="trialForm" action="{{ route('daftar.trial.store') }}" method="POST" novalidate>
        @csrf

        <!-- STEP 1 -->
        <div class="form-step active" id="step-1">
            <h3>Langkah 1: Data Diri Siswa</h3>

            <div class="form-row">
                <div class="input-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        value="{{ old('nama_lengkap') }}" required
                        pattern="^[A-Za-z\s]+$"
                        title="Nama hanya huruf dan spasi">
                    <div class="client-error" aria-live="polite"></div>
                    @error('nama_lengkap') <div class="server-error">{{ $message }}</div> @enderror
                </div>

                <div class="input-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text" id="nama_panggilan" name="nama_panggilan"
                        value="{{ old('nama_panggilan') }}"
                        pattern="^[A-Za-z\s]*$"
                        title="Nama panggilan hanya huruf dan spasi jika diisi">
                    <div class="client-error" aria-live="polite"></div>
                    @error('nama_panggilan') <div class="server-error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="input-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">- Pilih -</option>
                    <option value="Laki-laki" @selected(old('jenis_kelamin')=='Laki-laki')>Laki-laki</option>
                    <option value="Perempuan" @selected(old('jenis_kelamin')=='Perempuan')>Perempuan</option>
                </select>
                <div class="client-error" aria-live="polite"></div>
                @error('jenis_kelamin') <div class="server-error">{{ $message }}</div> @enderror
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" id="asal_sekolah" name="asal_sekolah"
                        value="{{ old('asal_sekolah') }}" required
                        pattern="^[A-Za-z0-9\s\.\-\,&()]+$"
                        title="Asal sekolah mengandung karakter tidak valid">
                    <div class="client-error" aria-live="polite"></div>
                    @error('asal_sekolah') <div class="server-error">{{ $message }}</div> @enderror
                </div>

                <div class="input-group">
                    <label for="dari_kelas">Dari Kelas</label>
                    <select id="dari_kelas" name="dari_kelas" required>
                        <option value="">- Pilih -</option>
                        <option value="SD-1" @selected(old('dari_kelas')=='SD-1')>SD-1</option>
                        <option value="SD-2" @selected(old('dari_kelas')=='SD-2')>SD-2</option>
                        <option value="SD-3" @selected(old('dari_kelas')=='SD-3')>SD-3</option>
                        <option value="SD-4" @selected(old('dari_kelas')=='SD-4')>SD-4</option>
                        <option value="SD-5" @selected(old('dari_kelas')=='SD-5')>SD-5</option>
                        <option value="SD-6" @selected(old('dari_kelas')=='SD-6')>SD-6</option>
                        <option value="SMP-7" @selected(old('dari_kelas')=='SMP-7')>SMP-7</option>
                        <option value="SMP-8" @selected(old('dari_kelas')=='SMP-8')>SMP-8</option>
                        <option value="SMP-9" @selected(old('dari_kelas')=='SMP-9')>SMP-9</option>
                        <option value="SMA-10" @selected(old('dari_kelas')=='SMA-10')>SMA-10</option>
                        <option value="SMA-11" @selected(old('dari_kelas')=='SMA-11')>SMA-11</option>
                        <option value="SMA-12" @selected(old('dari_kelas')=='SMA-12')>SMA-12</option>
                    </select>
                    <div class="client-error" aria-live="polite"></div>
                    @error('dari_kelas') <div class="server-error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="button-group" style="justify-content: flex-end;">
                <button type="button" class="btn btn-next">Selanjutnya</button>
            </div>
        </div>

        <!-- STEP 2 -->
        <div class="form-step" id="step-2">
            <h3>Langkah 2: Data Orang Tua & Kontak</h3>

            <div class="input-group">
                <label for="nama_orangtua">Nama Orang Tua</label>
                <input type="text" id="nama_orangtua" name="nama_orangtua"
                    value="{{ old('nama_orangtua') }}" required
                    pattern="^[A-Za-z\s]+$"
                    title="Nama orang tua hanya huruf dan spasi">
                <div class="client-error" aria-live="polite"></div>
                @error('nama_orangtua') <div class="server-error">{{ $message }}</div> @enderror
            </div>

            <div class="input-group">
                <label for="telp_hp_ortu">Telp./HP (WhatsApp)</label>
                <input type="tel" id="telp_hp_ortu" name="telp_hp_ortu"
                    value="{{ old('telp_hp_ortu') }}" required
                    inputmode="tel" pattern="^\d{8,15}$" maxlength="15"
                    title="Nomor telepon harus 8-15 digit angka">
                <div class="client-error" aria-live="polite"></div>
                @error('telp_hp_ortu') <div class="server-error">{{ $message }}</div> @enderror
            </div>

            <div class="input-group">
                <label for="alamat">Alamat Lengkap Domisili</label>
                <textarea id="alamat" name="alamat" rows="4" required>{{ old('alamat') }}</textarea>
                <div class="client-error" aria-live="polite"></div>
                @error('alamat') <div class="server-error">{{ $message }}</div> @enderror
            </div>

            <div class="button-group">
                <button type="button" class="btn btn-prev">Sebelumnya</button>
                <button type="submit" class="btn btn-submit">Daftar Trial</button>
            </div>
        </div>
    </form>
</div>

<style>
    .input-error { border-color: #d32f2f !important; }
    .client-error { color:#d32f2f; font-size:.85rem; margin-top:6px; min-height:18px; }
    .server-error { color:#d32f2f; font-size:.85rem; margin-top:6px; }
    .btn-next.disabled, .btn-next[disabled] { opacity:.5; pointer-events:none; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const formSteps = Array.from(document.querySelectorAll('.form-step'));
    const progressSteps = Array.from(document.querySelectorAll('.progress-step'));
    const nextButtons = document.querySelectorAll('.btn-next');
    const prevButtons = document.querySelectorAll('.btn-prev');
    
    // AMBIL STEP DARI SERVER
    let currentStep = Number("{{ session('active_step', 0) }}");

    function showStep(stepIndex) {
        formSteps.forEach((step, index) => {
            step.classList.toggle('active', index === stepIndex);
        });
        progressSteps.forEach((step, index) => {
            // Trial cuma 2 step, logic simple
            step.classList.toggle('active', index <= stepIndex);
        });
        currentStep = stepIndex;
    }

    function validateStep(stepIndex) {
        const currentStepEl = formSteps[stepIndex];
        const inputs = currentStepEl.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;

        inputs.forEach(input => {
            const errorBox = input.parentNode.querySelector('.client-error');
            input.classList.remove('input-error');
            if(errorBox) errorBox.innerText = "";

            if (!input.value.trim()) {
                input.classList.add('input-error');
                if(errorBox) errorBox.innerText = "Wajib diisi";
                isValid = false;
            }
        });
        return isValid;
    }

    nextButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                if (currentStep < formSteps.length - 1) {
                    showStep(currentStep + 1);
                }
            }
        });
    });

    prevButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentStep > 0) {
                showStep(currentStep - 1);
            }
        });
    });

    // Highlight Server Errors
    const serverErrors = JSON.parse('{!! json_encode($errors->keys() ?? []) !!}');
    
    if (Array.isArray(serverErrors) && serverErrors.length > 0) {
        const firstErrorField = serverErrors[0];
        for (let i = 0; i < formSteps.length; i++) {
            if (formSteps[i].querySelector(`[name="${firstErrorField}"]`)) {
                showStep(i);
                break;
            }
        }
    } else {
        showStep(currentStep);
    }
});
</script>

@endsection
