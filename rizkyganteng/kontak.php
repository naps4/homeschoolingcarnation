<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Homeschooling Carnation Cirebon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacifico&family=Poppins:wght@400;400;600;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* --- COPY DARI KODE REFERENSI (Reset & Header/Footer) --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e6f0ff 0%, #fff0f5 50%, #fffdf0 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* == HEADER STYLES == */
        .top-header {
            background-color: #d11e1f; 
            color: #ffffff;
            padding: 1.2rem 1.5rem; 
            display: flex;
            align-items: center; 
            position: relative; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border-bottom: 5px solid #a81819; 
        }
        .top-header .logo { width: 60px; height: 60px; flex-shrink: 0; z-index: 2; }
        .top-header .header-content {
            position: absolute; left: 50%; top: 50%;
            transform: translate(-50%, -50%); 
            text-align: center; width: 100%; padding: 0 100px; 
            z-index: 1;
        }
        .top-header h3 { font-size: 0.8rem; font-weight: 400; margin-bottom: 5px; }
        .top-header h2 { font-family: 'Oswald', sans-serif; font-size: 1.6rem; font-weight: 700; line-height: 1.1; }
        .top-header .tagline { font-family: 'Pacifico', cursive; font-size: 1rem; margin-top: 5px; }
        
        /* == NAVBAR STYLES == */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
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

        /* == FOOTER STYLES == */
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
           KHUSUS HALAMAN KONTAK (SESUAI GAMBAR)
           ========================================= */
        
        .contact-main {
            max-width: 700px;
            margin: 3rem auto;
            padding: 0 1.5rem;
            text-align: center;
            width: 100%;
        }

        .section-title {
            font-family: 'Times New Roman', serif; /* Mengikuti gaya font di gambar */
            font-size: 1.8rem;
            letter-spacing: 2px;
            color: #000;
            margin-bottom: 1.5rem;
            margin-top: 2rem;
            text-transform: uppercase;
        }

        /* Container Tombol */
        .button-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 3rem;
        }

        /* Style Umum Tombol */
        .contact-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 15px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace; /* Font monospaced mirip gambar */
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 3px;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
        }

        .contact-btn i {
            position: absolute;
            left: 20px;
            font-size: 1.2rem;
        }

        .contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Style Tombol Biru (Kontak) */
        .btn-blue {
            background-color: #edf4fc; /* Warna biru muda pudar */
            border: 1px solid #9fbddb;
            color: #000;
        }
        
        .btn-blue:hover {
            background-color: #dceafc;
            border-color: #7faad0;
        }

        /* Style Tombol Kuning/Cream (Sosmed) */
        .btn-cream {
            background-color: #fff8e7; /* Warna cream/kuning muda pudar */
            border: 1px solid #fadd9e;
            color: #000;
        }

        .btn-cream:hover {
            background-color: #fff0cd;
            border-color: #eec46e;
        }

        /* Responsif Mobile */
        @media (max-width: 800px) {
            .top-header { padding: 0.75rem 1rem; flex-wrap: nowrap; gap: 10px; }
            .top-header .logo { width: 45px; height: 45px; }
            .top-header .header-content { position: static; transform: none; text-align: left; padding: 0; width: auto; margin-left: 10px; }
            .top-header h2 { font-size: 1.1rem; }
            .top-header h3, .top-header .tagline { font-size: 0.7rem; }
            .navbar .nav-links a { font-size: 0.8rem; padding: 0.5rem; }
            .footer-content { flex-direction: column; }
            
            .contact-btn {
                font-size: 0.9rem;
                padding: 12px;
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
            <a href="/pendaftaran">Pendaftaran</a>
            <a href="/kontak" class="active">Kontak</a>
        </div>
    </nav>

    <main class="contact-main">
        
        <h2 class="section-title">KONTAK KAMI</h2>
        
        <div class="button-group">
            <a href="https://wa.me/6281323717184" target="_blank" class="contact-btn btn-blue">
                <i class="fa-solid fa-phone"></i>
                W h a t s a p p
            </a>
            
            <a href="mailto:hscarnation2015@gmail.com" class="contact-btn btn-blue">
                <i class="fa-solid fa-envelope"></i>
                G m a i l
            </a>
        </div>

        <h2 class="section-title">SOSIAL MEDIA KAMI</h2>
        
        <div class="button-group">
            <a href="https://www.instagram.com/homeschooling_carnationcrb" target="_blank" class="contact-btn btn-cream">
                <i class="fa-brands fa-instagram"></i>
                I n s t a g r a m
            </a>
            
            <a href="https://www.tiktok.com/@homeschoolingcarn?is_from_webapp=1&sender_device=pc" target="_blank" class="contact-btn btn-cream">
                <i class="fa-brands fa-tiktok"></i>
                T i k t o k
            </a>
            
            <a href="https://www.youtube.com/@homeschoolingcarnationcire1255" target="_blank" class="contact-btn btn-cream">
                <i class="fa-brands fa-youtube"></i>
                Y o u t u b e
            </a>
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