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

        <form id="multiStepForm" action="{{ route('daftar.trial') }}" method="POST">
            @csrf
            
            <div class="form-step active" id="step-1">
                <h3>Langkah 1: Data Diri Siswa</h3>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="input-group">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" id="nama_panggilan" name="nama_panggilan">
                    </div>
                </div>

                <div class="input-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">- Pilih -</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" required>
                    </div>
                    <div class="input-group">
                        <label for="dari_kelas">Dari Kelas</label>
                        <select id="dari_kelas" name="dari_kelas" required>
                            <option value="">- Pilih -</option>
                            <option value="SD-1">SD-1</option>
                            <option value="SD-2">SD-2</option>
                            <option value="SD-3">SD-3</option>
                            <option value="SD-4">SD-4</option>
                            <option value="SD-5">SD-5</option>
                            <option value="SD-6">SD-6</option>
                            <option value="SMP-7">SMP-7</option>
                            <option value="SMP-8">SMP-8</option>
                            <option value="SMP-9">SMP-9</option>
                            <option value="SMA-10">SMA-10</option>
                            <option value="SMA-11">SMA-11</option>
                            <option value="SMA-12">SMA-12</option>
                        </select>
                    </div>
                </div>
                
                <div class="button-group" style="justify-content: flex-end;"> 
                    <button type="button" class="btn btn-next" data-step="next">Selanjutnya</button>
                </div>
            </div>

            <div class="form-step" id="step-2">
                <h3>Langkah 2: Data Orang Tua & Kontak</h3>

                <div class="input-group">
                    <label for="nama_orangtua">Nama Orang Tua</label>
                    <input type="text" id="nama_orangtua" name="nama_orangtua" required>
                </div>
                
                <div class="input-group">
                    <label for="telp_hp_ortu">Telp./HP (WhatsApp)</label>
                    <input type="tel" id="telp_hp_ortu" name="telp_hp_ortu" required>
                </div>
                
                <div class="input-group">
                    <label for="alamat">Alamat Lengkap Domisili</label>
                    <textarea id="alamat" name="alamat" rows="4" required></textarea>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-prev" data-step="prev">Sebelumnya</button>
                    <button type="submit" class="btn btn-submit">Daftar Trial</button>
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

            function showStep(stepIndex) {
                formSteps.forEach((step, index) => {
                    step.classList.toggle('active', index === stepIndex);
                });
                
                progressSteps.forEach((step, index) => {
                    if (index === stepIndex) {
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

            showStep(0);
        });
    </script>
@endsection