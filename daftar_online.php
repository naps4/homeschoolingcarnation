<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Online</title>

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
            max-width: 750px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        /* ==================================
        == CSS HEADER DIPERBARUI DI SINI ==
        ==================================
        */
        .form-header {
            background-color: #d90429; /* Warna merah header */
            color: white;
            padding: 1.5rem;
            text-align: center;
            position: relative; /* <-- PENTING untuk posisi tombol */
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

        /* ==================================
        == CSS BARU UNTUK TOMBOL KEMBALI ==
        ==================================
        */
        .back-link {
            position: absolute;
            top: 50%; /* Posisikan di tengah vertikal header */
            left: 1.5rem; /* Jarak 1.5rem dari kiri */
            transform: translateY(-50%); /* Trik centering */
            
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .back-link:hover {
            background-color: rgba(0, 0, 0, 0.2); /* Efek hover gelap transparan */
        }
        /* Akhir dari CSS Baru */


        /* --- 1. PROGRESS BAR --- */
        .progress-bar {
            /* ... (CSS lainnya tidak berubah) ... */
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
            width: 25%;
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
            color: #d90429;
        }
        
        .progress-step.active .step-number {
            background-color: #d90429;
            color: white;
            border-color: #d90429;
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
        .input-group input[type="email"],
        .input-group input[type="tel"],
        .input-group input[type="date"],
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

        .input-group input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            font-family: 'Poppins', sans-serif;
            border: 1px solid #ddd;
            border-radius: 5px;
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
            background-color: #28a745;
            color: white;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        
        .consent-group {
            display: flex;
            align-items: flex-start;
            margin-top: 1.5rem;
        }
        .consent-group input[type="checkbox"] {
            margin-right: 0.75rem;
            width: 1.25em;
            height: 1.25em;
            margin-top: 0.15em;
        }
        .consent-group label {
            font-size: 0.9rem;
            color: #555;
            line-height: 1.5;
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
            .progress-bar {
                padding: 1rem;
            }
            .progress-step span {
                font-size: 0.7rem;
            }
            
            /* Penyesuaian Tombol Kembali di HP */
            .back-link {
                left: 1rem;
                top: 1rem; /* Pindahkan ke atas */
                transform: translateY(0); /* Hapus centering */
                padding: 5px 8px;
            }
            
            .form-header {
                padding-top: 3.5rem; /* Beri ruang untuk tombol kembali */
                padding-bottom: 1rem;
            }
            .form-header h2 {
                font-size: 1.2rem; /* Kecilkan judul di HP */
            }
        }

    </style>
</head>
<body>

    <div class="form-container">
        
        <div class="form-header">
            
            <a href="index.php" class="back-link">
                &lt; Kembali
            </a>
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

        <form id="multiStepForm" action="cetak_butki.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-step active" id="step-1">
                <h3>Langkah 1: Data Diri Siswa</h3>
                
                <div class="input-group">
                    <label for="nama_lengkap">Nama Lengkap (Sesuai Akta)</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" id="nama_panggilan" name="nama_panggilan">
                    </div>
                    <div class="input-group">
                        <label for="nik">NIK (Sesuai KK)</label>
                        <input type="text" id="nik" name="nik" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="input-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">- Pilih -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="agama">Agama</label>
                        <select id="agama" name="agama" required>
                            <option value="">- Pilih -</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Kepercayaan">Kepercayaan thd TuhanYME</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="warga_negara">Warga Negara</label>
                        <select id="warga_negara" name="warga_negara" required>
                            <option value="">- Pilih -</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="gol_darah">Golongan Darah</label>
                        <select id="gol_darah" name="gol_darah">
                            <option value="">- Pilih (Opsional) -</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                
                <div class="button-group">
                    <button type="button" class="btn btn-next" data-step="next">Selanjutnya</button>
                </div>
            </div>

            <div class="form-step" id="step-2">
                <h3>Langkah 2: Akademik & Kontak</h3>

                <div class="form-row">
                    <div class="input-group">
                        <label for="sekolah_asal">Sekolah Asal</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" required>
                    </div>
                    <div class="input-group">
                        <label for="nisn">NISN</label>
                        <input type="text" id="nisn" name="nisn">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="tingkat">Tingkat (Pendidikan Terakhir)</label>
                        <input type="text" id="tingkat" name="tingkat" placeholder="Mis: Kelas 5 SD, Kelas 10 SMA">
                    </div>
                    <div class="input-group">
                        <label for="program_hs">Program Homeschooling</label>
                        <select id="program_hs" name="program_hs" required>
                            <option value="">- Pilih Program -</option>
                            <option value="SaC">Belajar di Sekolah (SaC)</option>
                            <option value="LoS">Belajar di Rumah (LoS)</option>
                        </select>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="prestasi">Prestasi Belajar (Opsional)</label>
                    <textarea id="prestasi" name="prestasi" rows="3" placeholder="Contoh: Juara 1 Lomba Cerdas Cermat"></textarea>
                </div>
                
                <hr style="margin: 1.5rem 0; border: 1px solid #f0f0f0;">
                
                <div class="form-row">
                    <div class="input-group">
                        <label for="email">Email (Orang Tua / Wali)</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="telp_hp">Telp./HP (WhatsApp)</label>
                        <input type="tel" id="telp_hp" name="telp_hp" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="alamat">Alamat Lengkap Domisili</label>
                    <textarea id="alamat" name="alamat" rows="3" required></textarea>
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
                        <input type="text" id="nama_ayah" name="nama_ayah">
                    </div>
                    <div class="input-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah">
                    </div>
                </div>
                <div class="input-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah</label>
                    <select id="penghasilan_ayah" name="penghasilan_ayah">
                        <option value="">- Pilih -</option>
                        <option value="<500rb">&lt;Rp. 500.000</option>
                        <option value="500rb-1jt">Rp. 500.000 - Rp. 999.999</option>
                        <option value="1jt-2jt">Rp. 1.000.000 - Rp. 1.999.999</option>
                        <option value="2jt-5jt">Rp. 2.000.000 - Rp. 4.999.999</option>
                        <option value="5jt-20jt">Rp. 5.000.000 - Rp. 20.000.000</option>
                        <option value=">20jt">&gt;Rp. 20.000.000</option>
                        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                    </select>
                </div>

                <hr style="margin: 1.5rem 0; border: 1px solid #f0f0f0;">
                
                <h4>Data Ibu</h4>
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" id="nama_ibu" name="nama_ibu" required>
                    </div>
                    <div class="input-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu">
                    </div>
                </div>
                <div class="input-group">
                    <label for="penghasilan_ibu">Penghasilan Ibu</label>
                    <select id="penghasilan_ibu" name="penghasilan_ibu">
                        <option value="">- Pilih -</option>
                        <option value="<500rb">&lt;Rp. 500.000</option>
                        <option value="500rb-1jt">Rp. 500.000 - Rp. 999.999</option>
                        <option value="1jt-2jt">Rp. 1.000.000 - Rp. 1.999.999</option>
                        <option value="2jt-5jt">Rp. 2.000.000 - Rp. 4.999.999</option>
                        <option value="5jt-20jt">Rp. 5.000.000 - Rp. 20.000.000</option>
                        <option value=">20jt">&gt;Rp. 20.000.000</option>
                        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                    </select>
                </div>
                
                <hr style="margin: 1.5rem 0; border: 1px solid #f0f0f0;">

                <h4>Data Wali (Isi jika tinggal dengan Wali)</h4>
                <div class="form-row">
                    <div class="input-group">
                        <label for="nama_wali">Nama Wali</label>
                        <input type="text" id="nama_wali" name="nama_wali">
                    </div>
                    <div class="input-group">
                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                        <input type="text" id="pekerjaan_wali" name="pekerjaan_wali">
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
                </div>
                
                <div class="input-group">
                    <label for="file_ijazah">Upload Ijazah / SKHUN Terakhir (PDF, JPG, PNG)</label>
                    <input type="file" id="file_ijazah" name="file_ijazah" accept=".pdf,.jpg,.jpeg,.png" required>
                </div>
                
                <div class="consent-group">
                    <input type="checkbox" id="persetujuan" name="persetujuan" required>
                    <label for="persetujuan">
                        Saya bertanggung jawab atas Data yang Saya kirimkan adalah Benar.
                    </label>
                </div>

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
            
            let currentStep = 0; // Dimulai dari langkah 0 (indeks array)

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

            // Tampilkan langkah pertama saat halaman dimuat
            showStep(0);
        });
    </script>

</body>
</html>