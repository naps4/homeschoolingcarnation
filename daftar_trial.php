<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Daftar Trial</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- Reset & Pengaturan Dasar --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem 0;
        }

        /* --- Kontainer Form Utama --- */
        .form-container {
            width: 90%;
            max-width: 650px; /* Dibuat sedikit lebih ramping */
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .form-header {
            background-color: #00b4d8; /* Warna biru muda untuk "Trial" */
            color: white;
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }
        
        .form-header h2 {
            margin: 0;
            font-weight: 700;
        }
        .form-header p {
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Tombol Kembali */
        .back-link {
            position: absolute;
            top: 50%;
            left: 1.5rem;
            transform: translateY(-50%);
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .back-link:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }

        /* --- 1. PROGRESS BAR (Disederhanakan jadi 2) --- */
        .progress-bar {
            display: flex;
            justify-content: space-between;
            padding: 1.5rem 2rem;
            border-bottom: 1px solid #ddd;
        }
        
        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 0.8rem;
            color: #aaa;
            width: 50%; /* << DIUBAH: Hanya 2 langkah */
            text-align: center;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #eee;
            border: 2px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .progress-step.active {
            color: #00b4d8;
        }
        
        .progress-step.active .step-number {
            background-color: #00b4d8;
            color: white;
            border-color: #00b4d8;
        }

        /* --- 2. KONTEN FORMULIR --- */
        form {
            padding: 2rem;
        }

        .form-step {
            display: none;
        }
        
        .form-step.active {
            display: block;
        }
        
        .form-step h3 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.5rem;
        }

        .input-group {
            margin-bottom: 1.25rem;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #555;
        }
        
        .input-group input[type="text"],
        .input-group input[type="tel"],
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            background-color: #fafafa;
        }
        
        .form-row {
            display: flex;
            gap: 1.5rem;
        }
        
        .form-row .input-group {
            width: 50%;
        }

        /* --- 3. TOMBOL NAVIGASI --- */
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }
        
        .btn {
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .btn-prev {
            background-color: #aaa;
            color: white;
        }
        .btn-prev:hover {
            background-color: #888;
        }

        .btn-next {
            background-color: #4A90E2;
            color: white;
        }
        .btn-next:hover {
            background-color: #357ABD;
        }
        
        .btn-submit {
            background-color: #28a745; /* Hijau */
            color: white;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        
        /* Responsif */
        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            .form-row .input-group {
                width: 100%;
            }
            .back-link {
                left: 1rem;
                top: 1rem;
                transform: translateY(0);
                padding: 5px 8px;
            }
            .form-header {
                padding-top: 3.5rem;
                padding-bottom: 1rem;
            }
            .form-header h2 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        
        <div class="form-header">
            <a href="/" class="back-link">
                &lt; Kembali
            </a>

            <h2>FORMULIR DAFTAR TRIAL</h2>
            <p>HOMESCHOOLING CARNATION CIREBON</p>
        </div>

        <div class="progress-bar">
            <div class="progress-step active" data-step="1">
                <div class="step-number">1</div>
                <span>Data Siswa</span>
            </div>
            <div class="progress-step" data-step="2">
                <div class="step-number">2</div>
                <span>Data Ortu & Kontak</span>
            </div>
        </div>

        <form id="multiStepForm" action="/proses-daftar-trial" method="POST">
            
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
                        <label for="sekolah_asal">Asal Sekolah</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" required>
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
                
                <div class="button-group" style="justify-content: flex-end;"> <button type="button" class="btn btn-next" data-step="next">Selanjutnya</button>
                </div>
            </div>

            <div class="form-step" id="step-2">
                <h3>Langkah 2: Data Orang Tua & Kontak</h3>

                <div class="input-group">
                    <label for="nama_ortu">Nama Orang Tua</label>
                    <input type="text" id="nama_ortu" name="nama_ortu" required>
                </div>
                
                <div class="input-group">
                    <label for="telp_hp">Telp./HP (WhatsApp)</label>
                    <input type="tel" id="telp_hp" name="telp_hp" required>
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

</body>
</html>