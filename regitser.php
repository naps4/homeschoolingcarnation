<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Homeschooling</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

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
            padding: 2rem 0; /* Padding atas bawah untuk layar kecil */
        }

        /* --- Kontainer Pendaftaran --- */
        .register-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            
            /* --- KUNCI RESPONSIF --- */
            width: 90%; 
            max-width: 450px; /* Sedikit lebih lebar dari login */
        }

        .register-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 2rem;
        }

        /* --- Grup Input (Label + Input) --- */
        .input-group {
            margin-bottom: 1.25rem; /* Jarak antar grup lebih rapat */
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 600;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        /* --- Grup Checkbox Persetujuan --- */
        .consent-group {
            display: flex;
            align-items: flex-start; /* Rata atas */
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .consent-group input[type="checkbox"] {
            /* Custom checkbox style */
            width: 1.25em; /* Ukuran kotak cek */
            height: 1.25em;
            margin-top: 0.15em; /* Penyesuaian posisi */
            margin-right: 0.75rem;
            flex-shrink: 0; /* Agar checkbox tidak mengecil */
        }
        
        .consent-group label {
            font-size: 0.85rem;
            color: #555;
            line-height: 1.5; /* Jarak antar baris */
        }

        .consent-group label a {
            color: #4A90E2;
            text-decoration: none;
        }
        .consent-group label a:hover {
            text-decoration: underline;
        }

        /* --- Tombol Daftar & EFEK HOVER --- */
        .register-button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            background-color: #28a745; /* Warna hijau untuk daftar */
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .register-button:hover {
            background-color: #218838; /* Hijau lebih gelap */
            transform: translateY(-2px);
        }
        
        /* Tombol non-aktif (jika persetujuan belum dicek) */
        /* Anda bisa tambahkan JS untuk fungsionalitas ini */
        .register-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        /* --- Link Tambahan (Sudah Punya Akun) --- */
        .footer-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .footer-link a {
            color: #4A90E2;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="register-container">
        
        <h2>Buat Akun Homeschooling</h2>

        <form action="/proses-register" method="POST">
            
            <div class="input-group">
                <label for="nama">Nama Lengkap Anda (Orang Tua/Wali)</label>
                <input type="text" id="nama" name="nama_lengkap" required>
            </div>
            
            <div class="input-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="input-group">
                <label for="telepon">Nomor Telepon / WA</label>
                <input type="tel" id="telepon" name="telepon" required>
            </div>

            <div class="input-group">
                <label for="password">Buat Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="input-group">
                <label for="konfirmasi_password">Konfirmasi Password</label>
                <input type="password" id="konfirmasi_password" name="konfirmasi_password" required>
            </div>

            <div class="consent-group">
                <input type="checkbox" id="persetujuan" name="persetujuan" required>
                <label for="persetujuan">
                    Saya telah membaca dan setuju dengan 
                    <a href="/syarat-ketentuan" target="_blank">Syarat & Ketentuan</a> 
                    serta 
                    <a href="/kebijakan-privasi" target="_blank">Kebijakan Privasi</a>.
                </label>
            </div>

            <button type="submit" class="register-button">Buat Akun Saya</button>
            
        </form>
        
        <div class="footer-link">
            <a href="login.php">Sudah punya akun? Masuk di sini</a>
        </div>

    </div>
    
</body>
</html>