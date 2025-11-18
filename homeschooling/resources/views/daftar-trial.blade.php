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
    const form = document.getElementById('trialForm');
    const steps = Array.from(document.querySelectorAll('.form-step'));
    const nextBtns = document.querySelectorAll('.btn-next');
    const prevBtns = document.querySelectorAll('.btn-prev');
    const progress = Array.from(document.querySelectorAll('.progress-step'));
    let current = 0;

    // regex rules aligned with controller
    const RULES = {
        letters: /^[A-Za-z\s]+$/,
        lettersOptional: /^[A-Za-z\s]*$/,
        school: /^[A-Za-z0-9\s\.\-\,&()]+$/,
        numbers8to15: /^\d{8,15}$/,
        numbersAny: /^[0-9]+$/
    };

    function showStep(i) {
        steps.forEach((s, idx) => s.classList.toggle('active', idx === i));
        progress.forEach((p, idx) => p.classList.toggle('active', idx <= i));
        current = i;
    }

    function setError(input, msg) {
        input.classList.add('input-error');
        const box = input.parentNode.querySelector('.client-error');
        if (box) box.innerText = msg;
    }

    function clearError(input) {
        input.classList.remove('input-error');
        const box = input.parentNode.querySelector('.client-error');
        if (box) box.innerText = '';
    }

    function validateInput(input) {
        const name = input.name;
        const val = (input.value || '').trim();

        // required
        if (input.hasAttribute('required') && val === '') {
            setError(input, 'Field ini wajib diisi.');
            return false;
        }

        // pattern native browser (if provided) will also check on submit but we enforce here:
        if (name === 'nama_lengkap') {
            if (!RULES.letters.test(val)) { setError(input, 'Nama hanya huruf dan spasi.'); return false; }
        }
        if (name === 'nama_panggilan') {
            if (val !== '' && !RULES.lettersOptional.test(val)) { setError(input, 'Nama panggilan hanya huruf dan spasi.'); return false; }
        }
        if (name === 'asal_sekolah') {
            if (!RULES.school.test(val)) { setError(input, 'Asal sekolah mengandung karakter tidak valid.'); return false; }
        }
        if (name === 'nama_orangtua') {
            if (!RULES.letters.test(val)) { setError(input, 'Nama orang tua hanya huruf dan spasi.'); return false; }
        }
        if (name === 'telp_hp_ortu') {
            if (!RULES.numbers8to15.test(val)) { setError(input, 'Nomor telepon harus 8-15 digit angka.'); return false; }
        }
        if (input.tagName.toLowerCase() === 'select' && input.hasAttribute('required')) {
            if (val === '') { setError(input, 'Silakan pilih opsi.'); return false; }
        }

        clearError(input);
        return true;
    }

    function validateStep(i) {
        const inputs = Array.from(steps[i].querySelectorAll('input,select,textarea'));
        let ok = true;
        for (const input of inputs) {
            if (!validateInput(input)) ok = false;
        }
        return ok;
    }

    // real-time validation
    form.addEventListener('input', (e) => {
        const t = e.target;
        if (!t) return;
        if (['INPUT','SELECT','TEXTAREA'].includes(t.tagName)) validateInput(t);
    });

    nextBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (validateStep(current)) {
                if (current < steps.length - 1) showStep(current + 1);
            } else {
                const first = steps[current].querySelector('.input-error');
                if (first) first.scrollIntoView({ behavior:'smooth', block:'center' });
            }
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (current > 0) showStep(current - 1);
        });
    });

    // on submit, validate all steps
    form.addEventListener('submit', (e) => {
        for (let i = 0; i < steps.length; i++) {
            if (!validateStep(i)) {
                e.preventDefault();
                showStep(i);
                const first = steps[i].querySelector('.input-error');
                if (first) first.scrollIntoView({ behavior:'smooth', block:'center' });
                return false;
            }
        }
        // allow submit (server-side validation will also run)
    });

    // jika ada error server-side dari Laravel, highlight dan buka step yang mengandung error
    const serverErrors = {!! json_encode($errors->keys() ?? []) !!};
    if (Array.isArray(serverErrors) && serverErrors.length > 0) {
        serverErrors.forEach(name => {
            const el = document.querySelector('[name="'+name+'"]');
            if (el) {
                setError(el, document.querySelector('[name="'+name+'"]').getAttribute('title') || 'Silakan perbaiki field ini.');
            }
        });

        // buka step berisi error pertama
        const first = serverErrors[0];
        for (let i = 0; i < steps.length; i++) {
            if (steps[i].querySelector('[name="'+first+'"]')) {
                showStep(i);
                break;
            }
        }
    }

    // initialize
    showStep(0);
});
</script>

@endsection
