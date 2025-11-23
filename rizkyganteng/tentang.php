<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Homeschooling - Carnation Cirebon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacifico&family=Poppins:wght@400;400;600;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
        /* --- Reset & Pengaturan Dasar --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* Latar belakang gradasi lembut agar lebih berwarna */
            background: linear-gradient(135deg, #e6f0ff 0%, #fff0f5 50%, #fffdf0 100%);
            min-height: 100vh;
            padding-bottom: 0; 
            overflow-x: hidden; 
        }
        
        header {
            width: 100%;
        }
        
        /* == TOP HEADER (MERAH) == */
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

        .top-header .logo {
            width: 60px; 
            height: 60px;
            flex-shrink: 0; 
            z-index: 2; 
        }

        .top-header .header-content {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%); 
            text-align: center; 
            width: 100%; 
            padding: 0 100px; 
            box-sizing: border-box;
            z-index: 1;
        }

        .top-header h3 {
            font-family: 'Poppins', sans-serif; 
            font-size: 0.8rem; 
            font-weight: 400;
            margin: 0;
            line-height: 1;
            margin-bottom: 5px; 
        }

        .top-header h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 1.6rem; 
            font-weight: 700;
            margin: 0;
            line-height: 1.1;
        }

        .top-header .tagline {
            font-family: 'Pacifico', cursive; 
            font-size: 1rem; 
            font-weight: 400;
            margin-top: 5px;
        }
        
        /* == NAVBAR (PUTIH) == */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            display: flex;
            justify-content: center; 
            align-items: center;
            padding: 0.75rem 2rem;
            margin-top: 0; 
            position: sticky; 
            top: 0;
            z-index: 100;
        }
        
        .navbar .nav-links {
            display: flex;
            gap: 0; 
        }

        .navbar .nav-links a {
            text-decoration: none;
            color: #222; 
            font-weight: 600;
            font-size: 1rem;
            padding: 0.5rem 1.2rem; 
            border-bottom: 3px solid transparent;
            transition: color 0.3s ease, border-color 0.3s ease;
        }
        
        .navbar .nav-links a:hover,
        .navbar .nav-links a.active {
            color: #d11e1f; 
            border-bottom-color: #d11e1f;
        }

        /* =========================================
           CSS HERO SECTION (BANNER)
           ========================================= */
        .hero-banner {
            /* Background gradasi banner */
            background: linear-gradient(105deg, #fff0f0 0%, #fff5f5 40%, #f0f4ff 100%);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 4rem 10%; 
            min-height: 85vh; 
            position: relative;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
            z-index: 10;
            padding-right: 20px;
        }

        .hero-subtitle {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            letter-spacing: 5px;
            color: #3b5d8f; 
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }

        .hero-title {
            font-family: 'Pacifico', cursive; 
            font-size: 3rem;
            line-height: 1.4;
            margin-bottom: 1.5rem;
            color: #333;
            text-shadow: 2px 2px 0px rgba(255,255,255,0.5);
        }

        /* Warna-warni huruf judul */
        .t-pink { color: #ff6b8b; }
        .t-blue { color: #4d79ff; }
        .t-purple { color: #a64dff; }

        .hero-desc {
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 2rem;
            font-style: italic;
            border-left: 4px solid #d11e1f;
            padding-left: 15px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-daftar-hero {
            background-color: #a80000;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(168, 0, 0, 0.3);
            transition: transform 0.3s;
        }
        .btn-tentang-hero {
            background-color: rgba(255,255,255,0.6);
            border: 2px solid #e0e0e0;
            color: #555;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-daftar-hero:hover, .btn-tentang-hero:hover {
            transform: translateY(-3px);
        }

        /* Kolom Gambar */
        .hero-image {
            flex: 1; 
            display: flex;
            justify-content: flex-end; 
            align-items: flex-end; 
            position: relative;
            min-width: 0; 
            gap: 0; 
        }
        
        .hero-image img {
            max-width: 48%; 
            height: auto;
            max-height: 500px; 
            filter: drop-shadow(10px 10px 20px rgba(0,0,0,0.15)); 
            object-fit: contain;
        }

        /* =========================================
           AKHIR CSS HERO SECTION
           ========================================= */


        /* == KONTEN UTAMA == */
        .container {
            max-width: 1000px;
            margin: 2rem auto; 
            padding: 0 1.5rem;
        }
        
        /* == STYLING UMUM BLOK KONTEN == */
        .about-section h1, .kurikulum-section h1, .legalitas-section h1 {
            font-family: 'Poppins', sans-serif; 
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-top: 3rem; 
            margin-bottom: 1.5rem;
        }
        
        .about-block {
            display: flex;
            flex-wrap: nowrap; 
            align-items: flex-start; 
            background-color: #e6f0ff; 
            border: 1px solid #cce0ff; 
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .about-block img {
            width: 350px; 
            height: auto;
            border-radius: 6px;
            margin-right: 1.5rem;
            object-fit: cover;
            flex-shrink: 0; 
            max-width: 40%; 
        }
        
        .about-block .img-kurikulum {
            width: 150px; 
            height: auto;
            border-radius: 6px;
            margin-right: 1.5rem;
            margin-left: 0; 
            align-self: center; 
            flex-shrink: 0;
        }
        
        .about-block p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #444;
            flex-grow: 1; 
        }
        
        .legalitas-content {
            display: flex;
            flex-wrap: nowrap; 
            background-color: #e6f0ff; 
            border: 1px solid #cce0ff; 
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            align-items: center;
        }
        
        .legalitas-list {
            list-style: none;
            padding-left: 0;
            flex: 1;
            min-width: 50%;
        }
        
        .legalitas-list li {
            font-size: 0.95rem;
            line-height: 2.2;
            color: #444;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .legalitas-image {
            width: 250px;
            height: auto;
            margin-left: 1.5rem;
            border-radius: 6px;
            object-fit: cover;
            flex-shrink: 0;
            max-width: 35%; 
        }

        /* Program Pendidikan */
        .program-pendidikan {
            margin-top: 3rem;
            position: relative;
            margin-bottom: 3rem;
        }
        
        .program-pendidikan h4 {
            position: absolute;
            top: -1.5rem; 
            left: 0; 
            right: auto; 
            font-size: 0.9rem;
            font-weight: 600;
            color: #333;
        }

        .program-grid {
            display: flex;
            gap: 20px;
            flex-wrap: nowrap; 
            justify-content: space-between;
        }

        .program-card {
            background-color: #e6f0ff; 
            border: 1px solid #cce0ff; 
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1 1 48%; 
        }
        
        /* Visi Misi, Legalitas, Pengajar, Alumni */
        .visi-misi-block {background-color: #e6f0ff; border: 1px solid #cce0ff; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); position: relative;} .visi-misi-block h4 {font-family: 'Oswald', sans-serif; font-size: 1.1rem; font-weight: 700; color: #000; text-align: center; margin-bottom: 0.5rem; padding-top: 10px;} .visi-misi-block .label {font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 700; color: #333; text-align: center; margin-bottom: 0.5rem;} .visi-misi-block .visi-text {text-align: center; font-style: italic; font-size: 1rem; color: #555; margin-bottom: 2rem; padding: 0 1rem;} .visi-misi-block .misi-list {list-style: none; padding-left: 0;} .visi-misi-block .misi-list li {font-size: 0.95rem; line-height: 1.8; color: #444; padding-left: 1.5rem; position: relative;} .visi-misi-block .misi-list li::before {content: '•'; color: #333; font-weight: bold; display: inline-block; width: 1em; margin-left: -1em;} .visi-misi-title {position: absolute; top: 10px; right: 1.5rem; font-size: 0.9rem; font-weight: 600; color: #333;} .legalitas-list li::before {content: '✓'; color: #1e90ff; font-weight: bold; display: inline-block; width: 1em; margin-left: -1em;} .tenaga-pengajar-section {margin-top: 3rem; margin-bottom: 3rem; position: relative;} .tenaga-pengajar-section h4 {position: absolute; top: -0.5rem; right: 0; font-size: 0.9rem; font-weight: 600; color: #333;} .pengajar-grid {background-color: #ffffff; border: 1px solid #cce0ff; border-radius: 8px; padding: 2rem 1.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: grid; grid-template-columns: repeat(5, 1fr); gap: 1.5rem; justify-items: center;} .pengajar-card {text-align: center; display: flex; flex-direction: column; align-items: center;} .pengajar-card img {width: 80px; height: 80px; border-radius: 50%; border: 3px solid #e6f0ff; object-fit: cover; margin-bottom: 0.5rem;} .pengajar-card span {font-size: 0.8rem; font-weight: 600; color: #333; text-transform: uppercase;} .alumni-section {margin-top: 4rem;} .alumni-section h4 {font-family: 'Pacifico', cursive; font-size: 2rem; color: #333; text-align: center; margin-bottom: 2rem;} .alumni-grid {display: flex; gap: 20px; overflow-x: auto; padding-bottom: 1rem; justify-content: center;} .alumni-card {flex: 0 0 300px; background-color: #ffffff; border: 1px solid #cce0ff; border-radius: 8px; padding: 1rem; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; min-height: 150px; margin-right: 1rem;} .alumni-card.large {flex: 0 0 450px; background-color: #e6f0ff;} .alumni-info {display: flex; align-items: center; margin-bottom: 0.5rem;} .alumni-info img {width: 50px; height: 50px; border-radius: 50%; margin-right: 10px; object-fit: cover;} .alumni-name-job span {display: block; font-size: 0.8rem; color: #666;} .alumni-card p.quote {font-size: 0.9rem; line-height: 1.5; color: #333; font-style: italic;}
        
        /* == STYLING FOOTER == */
        .main-footer {
            background-color: #ffffff;
            color: #333;
            padding: 4rem 1.5rem; 
            border-top: 5px solid #d11e1f; 
            font-size: 0.9rem;
        }

        .footer-content {
            max-width: 1100px; 
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            flex-wrap: wrap; 
        }

        .footer-col {
            flex: 1 1 250px; 
            margin-bottom: 1.5rem; 
        }

        .footer-col h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            font-weight: 700; 
            margin-bottom: 1.2rem;
            text-transform: uppercase;
            color: #333;
        }

        .footer-col a, .footer-col li {
            font-size: 0.9rem;
            color: #555;
            line-height: 1.8;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .footer-col ul {
            list-style: none;
            padding: 0;
        }

        .footer-col a:hover {
            color: #d11e1f;
        }
        
        .footer-logo-kurikulum {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .footer-logo-kurikulum img {
            height: 35px; 
            margin-right: 15px;
        }
        
        .footer-col.homeschooling h3 {
            font-size: 1.2rem; 
            font-weight: 700;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            color: #d11e1f; 
            text-transform: none; 
        }
        
        .alamat-utama {
            border: 1px solid #1e90ff; 
            background-color: #f0f8ff; 
            padding: 15px;
            border-radius: 8px; 
            margin-bottom: 15px;
        }
        
        .footer-col ul li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        
        .footer-col ul li i {
            margin-right: 10px;
            font-size: 1.1rem;
            flex-shrink: 0;
            padding-top: 2px;
            color: #d11e1f; 
        }

        .alamat-utama li i {
            color: #1e90ff; 
        }

        .social-links {
            list-style: none;
            padding: 0;
        }
        
        .social-links li {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        
        .social-links li i {
            margin-right: 10px;
            font-size: 1.2rem; 
            width: 20px;
            text-align: center;
            color: #555;
            transition: color 0.2s;
        }
        
        .social-links a:hover i {
            color: #d11e1f;
        }
        
        .copyright {
            max-width: 1100px;
            margin: 2rem auto 0;
            text-align: center;
            padding-top: 1rem;
            border-top: 1px dashed #ccc;
            color: #777;
            font-size: 0.85rem;
        }


        /* MEDIA QUERY (RESPONSIF) */
        @media (max-width: 800px) {
            .hero-banner {
                flex-direction: column-reverse;
                padding: 2rem 1.5rem;
                text-align: center;
                justify-content: center;
            }
            .hero-text { margin-top: 2rem; max-width: 100%; padding-right: 0;}
            .hero-desc { border-left: none; padding-left: 0; }
            .hero-buttons { justify-content: center; }
            .hero-title { font-size: 2.2rem; }
            
            .hero-image { justify-content: center; width: 100%; }
            .hero-image img { max-width: 45%; } 

            .about-block, .legalitas-content {flex-direction: column; flex-wrap: wrap; padding: 1rem;}
            .about-block img {width: 100%; margin-right: 0; margin-bottom: 1rem; max-width: 100%;} 
            .legalitas-content {flex-direction: column-reverse;}
            .legalitas-image {width: 100%; margin: 0 auto 1rem 0; max-width: 100%;}
            .program-grid {flex-direction: column; flex-wrap: wrap; gap: 15px;}
            .program-card {min-width: 100%;}
            .top-header {padding: 0.75rem 1rem; flex-wrap: nowrap; gap: 10px; position: relative;} .top-header .logo {width: 45px; height: 45px; margin: 0;} .top-header .header-content {position: static; transform: none; left: auto; top: auto; text-align: left; padding: 0; width: auto; margin-left: 10px;} .top-header h2 {font-size: 1.1rem;} .top-header h3, .top-header .tagline {font-size: 0.7rem;} .navbar {padding: 0.5rem 0.5rem;} .navbar .nav-links a {font-size: 0.8rem; padding: 0.5rem 0.5rem;} .container {margin-top: 1rem;} .pengajar-grid {grid-template-columns: repeat(3, 1fr); gap: 1rem;} .pengajar-card img {width: 60px; height: 60px;} .alumni-grid {justify-content: flex-start; padding: 0 1rem;} .alumni-card {flex: 0 0 250px;} .alumni-card.large {flex: 0 0 350px;}
            
            .footer-content { flex-direction: column; gap: 2rem; }
            .footer-col { min-width: 100%; }
            .alamat-utama { padding: 15px; }
            .main-footer { padding: 2rem 1rem; }
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
            <a href="Dashboard.php">Dashboard</a>
            <a href="tentang.php" class="active">Tentang</a>
            <a href="/ebook">E-book</a>
            <a href="/pendaftaran">Pendaftaran</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>

    <section class="hero-banner">
        
        <div class="hero-text">
            <h4 class="hero-subtitle">OPEN ENROLLMENT</h4>
            
            <h1 class="hero-title">
                <span class="t-pink">HOME</span> <span class="t-purple">SCHOOLING</span><br>
                <span class="t-pink">2026</span> <span class="t-purple">/</span> <span class="t-blue">2027</span>
            </h1>
            
            <p class="hero-desc">
                “Mulai dari SD hingga SMA, setiap program dibimbing tutor profesional serta dilengkapi 
                dengan fasilitas terbaik untuk menunjang minat dan bakat siswa.”
            </p>
            
            <div class="hero-buttons">
                <a href="/pendaftaran" class="btn-daftar-hero">Pendaftaran</a>
                <a href="tentang.php" class="btn-tentang-hero">Tentang Kami</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="open enrollment.png" alt="Siswa Homeschooling 1">
            <img src="open enrollment 2.png" alt="Siswa Homeschooling 2">
        </div>

    </section>

    <main class="container">
        
        <section class="about-section">
            <h1>TENTANG HOMESCHOOLING</h1>

            <div class="about-block">
                <img src="aktivitas.png" alt="Aktivitas Belajar Homeschooling">
                
                <p>
                    Homeschooling adalah sistem pendidikan di mana anak-anak belajar di rumah dengan bimbingan orang tua atau tutor profesional. Metode ini menawarkan fleksibilitas tinggi dalam penyesuaian kurikulum, jadwal, dan cara belajar sesuai kebutuhan anak. Dengan lingkungan yang nyaman dan dukungan keluarga, homeschooling membantu anak belajar lebih efektif sekaligus mengembangkan kemampuan sosial dan akademis.
                </p>
            </div>
        </section>


        <section class="visi-misi-section">
            <div class="visi-misi-block">
                
                <h4 class="label">VISI</h4>
                <p class="visi-text">
                    "TERWUJUDNYA GENERASI CERDAS, BERKARAKTER DAN MEMILIKI LIFE SKILLS DALAM LINGKUNGAN PENDIDIKAN YANG RAMAH DAN KONDUSIF."
                </p>

                <h4 class="label">MISI</h4>
                <ul class="misi-list">
                    <li>Mewujudkan peserta didik dengan kemampuan sesuai standar kurikulum merdeka.</li>
                    <li>Menumbuhkan peserta didik yang memiliki nilai-nilai budaya disiplin dan berkarakter.</li>
                    <li>Mengembangkan potensi keterampilan peserta didik sesuai minat dan bakat.</li>
                    <li>Mewujudkan lingkungan belajar dengan konsep Home Sweet Home.</li>
                    <li>Menyediakan layanan pendidikan dengan rasio siswa per kelas 1:10.</li>
                    <li>Memberikan hak belajar yang sama bagi siswa dengan kondisi berkebutuhan khusus.</li>
                </ul>
            </div>
        </section>
        
        <section class="kurikulum-section">
            <h1>KURIKULUM & PENDIDIKAN</h1>

            <div class="about-block">
                   <img src="kurikulum merdeka.png" alt="Logo Kurikulum Merdeka" class="img-kurikulum">

                <p>
                    Sebagai lembaga pendidikan non formal, HSCC menyelenggarakan pendidikan kesetaraan di semua jenjang, mulai dari SD hingga SMA. Kami menawarkan paket A setara SD, paket B setara SMP, dan paket C setara SMA dengan dua pilihan jurusan, yaitu IPA dan IPS. Lulusan HSCC memiliki kesempatan untuk melanjutkan pendidikan ke sekolah formal hingga perguruan tinggi.
                </p>
            </div>
            
            <div class="program-pendidikan">
                <h4>PROGRAM PENDIDIKAN HSCC</h4>
                <div class="program-grid">
                    
                    <div class="program-card">
                        <h5>STUDY AT CLASS (SAC)</h5>
                        <p>
                            Program ini memungkinkan siswa belajar bersama di Gedung HSCC setiap Senin–Kamis pukul 08.10–11.30 WIB. Dengan maksimal 10 siswa per kelompok, pembelajaran lebih intensif dan personal.
                        </p>
                    </div>
                    
                    <div class="program-card">
                        <h5>LEARNING ON SITE (LOS)</h5>
                        <p>
                            Program ini menyediakan tutor yang datang ke rumah dengan jadwal fleksibel sesuai kebutuhan orang tua. Pembelajaran berlangsung 2–3 kali per minggu.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="legalitas-section">
            <h1>LEGALITAS</h1>
            
            <div class="legalitas-content">
                <ul class="legalitas-list">
                    <li>Sudah masuk ke dalam Dinas Pendidikan Kota Cirebon</li>
                    <li>Sudah memiliki NPSN (Nomor Pokok Sekolah Nasional)</li>
                    <li>Ijazah sudah diakui</li>
                    <li>Terakreditasi BAN-PAUD-PNF</li>
                </ul>
                <img src="siswa dengan legalitas.png" alt="Siswa dengan Bukti Legalitas" class="legalitas-image">
            </div>
        </section>
        
        
        <section class="tenaga-pengajar-section">
            <h4>TENAGA PENGAJAR</h4>

            <div class="pengajar-grid">
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 1"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 2"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 3"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 4"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 5"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 6"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 7"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 8"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 9"> <span>NAME IS</span> </div>
                <div class="pengajar-card"> <img src="foto_guru_placeholder.jpg" alt="Foto Guru 10"> <span>NAME IS</span> </div>
            </div>
        </section>


        <section class="alumni-section">
            <h4>Apa kata alumni?</h4>

            <div class="alumni-grid">
                
                <div class="alumni-card">
                    <div class="alumni-info">
                        <img src="foto_guru_placeholder.jpg" alt="Foto Alumni 1">
                        <div class="alumni-name-job">
                            <span>NAME IS</span>
                            <span>Jabatan/Job saat ini</span>
                        </div>
                    </div>
                    <p class="quote">Kata-kata hari ini. Yang sudah selesai, boleh pulang.</p>
                </div>
                
                <div class="alumni-card large">
                    <div class="alumni-info">
                        <img src="foto_guru_placeholder.jpg" alt="Foto Alumni 2">
                        <div class="alumni-name-job">
                            <span>NAME IS</span>
                            <span>Universitas/Job saat ini</span>
                        </div>
                    </div>
                    <p class="quote">Kata-words hari ini. Yang sudah selesai, boleh pulang.</p>
                </div>

                <div class="alumni-card">
                    <div class="alumni-info">
                        <img src="foto_guru_placeholder.jpg" alt="Foto Alumni 3">
                        <div class="alumni-name-job">
                            <span>NAME IS</span>
                            <span>Universitas/Job saat ini</span>
                        </div>
                    </div>
                    <p class="quote">Kata-kata hari ini. Yang sudah selesai, boleh pulang.</p>
                </div>

            </div>
        </section>


    </main>
    
    <footer class="main-footer">
        <div class="footer-content">
            
            <div class="footer-col homeschooling">
                <div class="footer-logo-kurikulum">
                    <img src="Logo HSCC Genap - Copy.png" alt="Logo HSCC">
                    <img src="kurikulum merdeka.png" alt="Kurikulum Merdeka"> 
                </div>
                <h3>HOMESCHOOLING CARNATION CIREBON</h3>

                <ul class="alamat-utama">
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <p>HSCC 1, Jl. Ciremai Raya No. E 12 Perumnas Kelurahan Kecapi, RT.02/RW.18, Larangan Selatan, Harjamukti, Cirebon City, West Java 45142, Indonesia</p>
                    </li>
                </ul>
                
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <p>HSCC 2, RUKO BERRY GREEN KOMPLEK CSB MAL. 21, Kota Cirebon, Jawa Barat 45131, Indonesia</p>
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