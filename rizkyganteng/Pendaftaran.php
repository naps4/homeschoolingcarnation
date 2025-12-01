<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - Homeschooling Carnation Cirebon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacifico&family=Poppins:wght@400;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* --- CSS DASAR & HEADER/FOOTER (DARI KODE SEBELUMNYA) --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            /* Latar belakang default jika konten sedikit */
            background: linear-gradient(135deg, #e6f0ff 0%, #fff0f5 50%, #fffdf0 100%);
            min-height: 100vh; display: flex; flex-direction: column;
        }
        
        /* Header Styles */
        .top-header {
            background-color: #d11e1f; color: #ffffff; padding: 1.2rem 1.5rem; 
            display: flex; align-items: center; position: relative; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); border-bottom: 5px solid #a81819; 
        }
        .top-header .logo { width: 60px; height: 60px; flex-shrink: 0; z-index: 2; }
        .top-header .header-content {
            position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); 
            text-align: center; width: 100%; padding: 0 100px; z-index: 1;
        }
        .top-header h3 { font-size: 0.8rem; font-weight: 400; margin-bottom: 5px; }
        .top-header h2 { font-family: 'Oswald', sans-serif; font-size: 1.6rem; font-weight: 700; line-height: 1.1; }
        .top-header .tagline { font-family: 'Pacifico', cursive; font-size: 1rem; margin-top: 5px; }
        
        /* Navbar Styles */
        .navbar {
            background-color: #ffffff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            display: flex; justify-content: center; align-items: center;
            padding: 0.75rem 2rem; position: sticky; top: 0; z-index: 100;
        }
        .navbar .nav-links { display: flex; gap: 0; }
        .navbar .nav-links a {
            text-decoration: none; color: #222; font-weight: 600; font-size: 1rem;
            padding: 0.5rem 1.2rem; border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        .navbar .nav-links a:hover, .navbar .nav-links a.active {
            color: #d11e1f; border-bottom-color: #d11e1f;
        }

        /* Footer Styles */
        .main-footer {
            background-color: #ffffff; color: #333; padding: 4rem 1.5rem; 
            border-top: 5px solid #d11e1f; font-size: 0.9rem; margin-top: auto;
        }
        .footer-content { max-width: 1100px; margin: 0 auto; display: flex; justify-content: space-between; gap: 2rem; flex-wrap: wrap; }
        .footer-col { flex: 1 1 250px; margin-bottom: 1.5rem; }
        .footer-col h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 1.2rem; text-transform: uppercase; }
        .footer-col ul { list-style: none; padding: 0; }
        .footer-col a { text-decoration: none; color: #555; transition: 0.2s; }
        .footer-col a:hover { color: #d11e1f; }
        .footer-logo-kurikulum { display: flex; align-items: center; margin-bottom: 0.5rem; }
        .footer-logo-kurikulum img { height: 35px; margin-right: 15px; }
        .copyright { text-align: center; padding-top: 1rem; border-top: 1px dashed #ccc; color: #777; font-size: 0.85rem; margin-top: 2rem; }
        .social-links li { display: flex; align-items: center; margin-bottom: 0.75rem; }
        .social-links li i { margin-right: 10px; width: 20px; text-align: center; }

        /* =========================================
           CSS KHUSUS HALAMAN PENDAFTARAN (SESUAI GAMBAR)
           ========================================= */
        
        .pendaftaran-section {
            /* Latar belakang abu-abu sangat muda seperti di gambar */
            background-color: #f8f9fa; 
            padding: 5rem 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1; /* Agar mengisi ruang kosong antara header dan footer */
        }

        .registration-grid {
            display: flex;
            gap: 40px;
            max-width: 1000px;
            width: 100%;
            justify-content: center;
        }

        /* Style Umum Kartu */
        .reg-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 3rem 2rem;
            text-align: center;
            flex: 1;
            max-width: 450px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .reg-card:hover {
            transform: translateY(-5px);
        }

        .reg-card p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 2.5rem;
            letter-spacing: 0.5px;
        }

        /* Style Khusus Kartu Biru (Kiri) */
        .blue-card {
            border: 2px solid #1a5c9a; /* Warna biru border */
        }
        .highlight-blue {
            color: #1a5c9a;
            font-weight: 700;
        }
        .btn-dark-blue {
            background-color: #0f4c8a; /* Warna tombol biru tua */
            color: white;
        }
        .btn-dark-blue:hover {
            background-color: #0a3a6b;
        }

        /* Style Khusus Kartu Oranye (Kanan) */
        .orange-card {
            border: 2px solid #f0a500; /* Warna oranye border */
        }
        .highlight-orange {
            color: #f0a500;
            font-weight: 700;
        }
        .btn-orange {
            background-color: #f0a500; /* Warna tombol oranye */
            color: white;
        }
        .btn-orange:hover {
            background-color: #d69300;
        }

        /* Style Umum Tombol */
        .btn-daftar {
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            display: inline-block;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            width: 80%;
            margin: 0 auto; /* Center button */
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 800px) {
            /* Header adjustment from previous code */
            .top-header { padding: 0.75rem 1rem; flex-wrap: nowrap; gap: 10px; }
            .top-header .logo { width: 45px; height: 45px; }
            .top-header .header-content { position: static; transform: none; text-align: left; padding: 0; width: auto; margin-left: 10px; }
            .top-header h2 { font-size: 1.1rem; }
            .top-header h3, .top-header .tagline { font-size: 0.7rem; }
            .navbar .nav-links a { font-size: 0.8rem; padding: 0.5rem; }
            .footer-content { flex-direction: column; }

            /* Pendaftaran Specific Responsive */
            .registration-grid {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }
            .reg-card {
                width: 100%;
                padding: 2rem 1.5rem;
            }
             .reg-card p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="top-header">
            <img src="Logo HSCC Genap - Copy.png" alt="Logo HSCC" class="logo">
            <div class="header-content">
                <h3>SELAMAT DATANG DI WEBSITE</h3> 
                <h2>HOMESCHOOLING CARNATION CIREBON</h2>
                <p class="tagline">"Menyenangkan, Cerdas, dan Sukses"</p>
            </div>
        </div>
    </header>

    <nav class="navbar">
        <div class="nav-links">
            <a href="tentang.php">Tentang</a>
            <a href="/ebook">E-book</a>
            <a href="/pendaftaran" class="active">Pendaftaran</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>

    <main class="pendaftaran-section">
        
        <div class="registration-grid">
            
            <div class="reg-card blue-card">
                <p>
                    Daftar disini apabila kamu <span class="highlight-blue">sudah yakin</span> untuk menjadi bagian dari Homeschooling Carnation Cirebon! Jangan lupa siapin berkasnya ya ^-^
                </p>
                <a href="/form-daftar-online" class="btn-daftar btn-dark-blue">Daftar Online</a>
            </div>

            <div class="reg-card orange-card">
                <p>
                    Mau <span class="highlight-orange">nyoba-nyoba</span> liat contoh form pendaftarannya kayak apa? Klik tombol dibawah yaaa:)
                </p>
                <a href="/form-trial" class="btn-daftar btn-orange">Daftar Trial</a>
            </div>

        </div>

    </main>

    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-col homeschooling">
                <div class="footer-logo-kurikulum">
                    <img src="Logo HSCC Genap - Copy.png" alt="Logo HSCC">
                    <img src="kurikulum merdeka.png" alt="Kurikulum Merdeka"> 
                </div>
                <h3>HOMESCHOOLING CARNATION CIREBON</h3>
                <ul style="border: 1px solid #1e90ff; background-color: #f0f8ff; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <li style="display:flex; margin-bottom: 0;">
                        <i class="fa-solid fa-location-dot" style="color: #1e90ff; margin-right: 10px;"></i>
                        <p>HSCC 1, Jl. Ciremai Raya No. E 12 Perumnas, Cirebon</p>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>PINTASAN</h3>
                <ul>
                    <li><a href="tentang.php">Tentang Kami</a></li>
                    <li><a href="/pendaftaran">Info Pendaftaran</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>IKUTI KAMI</h3>
                <ul class="social-links">
                    <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fa-brands fa-tiktok"></i> Tiktok</a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; 2025 Homeschooling Carnation Cirebon. All Rights Reserved.
        </div>
    </footer>

</body>
</html>