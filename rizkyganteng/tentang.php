<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Homeschooling - Carnation Cirebon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacifico&family=Poppins:wght@400;400;600;600;700&display=swap" rel="stylesheet">


    <style>
        /* --- Reset & Pengaturan Dasar --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f8; 
            min-height: 100vh;
        }
        
        header {
            width: 100%;
        }

        /* (CSS TOP HEADER DAN NAVBAR TIDAK BERUBAH) */
        
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
            position: static; 
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

        /* == KONTEN UTAMA == */
        .container {
            max-width: 1000px;
            margin: 2rem auto; 
            padding: 0 1.5rem;
        }
        
        /* =====================================
        == STYLING UMUM BLOK (PERBAIKAN TATA LETAK HORIZONTAL)
        ===================================== */
        .about-section h1, .kurikulum-section h1, .legalitas-section h1 {
            font-family: 'Poppins', sans-serif; 
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            /* Tambahkan margin atas untuk memberi jarak dari section sebelumnya */
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
        
        /* Penyesuaian khusus untuk gambar Kurikulum Merdeka */
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
        
        /* Legalitas Content (Gambar Kanan, Teks Kiri) */
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

        /* =====================================
        == PERBAIKAN: PROGRAM PENDIDIKAN (SAC & LOS)
        ===================================== */
        .program-pendidikan {
            margin-top: 3rem;
            position: relative;
            margin-bottom: 3rem;
        }
        
        .program-pendidikan h4 {
            /* KUNCI PERBAIKAN: Pindahkan ke KIRI (right: auto dan tambahkan left: 0) */
            position: absolute;
            top: -1.5rem; 
            left: 0; 
            right: auto; /* Hilangkan posisi kanan */
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
        
        /* (CSS Visi Misi, Legalitas, Pengajar, Alumni lainnya tidak berubah) */
        .visi-misi-block {background-color: #e6f0ff; border: 1px solid #cce0ff; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); position: relative;} .visi-misi-block h4 {font-family: 'Oswald', sans-serif; font-size: 1.1rem; font-weight: 700; color: #000; text-align: center; margin-bottom: 0.5rem; padding-top: 10px;} .visi-misi-block .label {font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 700; color: #333; text-align: center; margin-bottom: 0.5rem;} .visi-misi-block .visi-text {text-align: center; font-style: italic; font-size: 1rem; color: #555; margin-bottom: 2rem; padding: 0 1rem;} .visi-misi-block .misi-list {list-style: none; padding-left: 0;} .visi-misi-block .misi-list li {font-size: 0.95rem; line-height: 1.8; color: #444; padding-left: 1.5rem; position: relative;} .visi-misi-block .misi-list li::before {content: '•'; color: #333; font-weight: bold; display: inline-block; width: 1em; margin-left: -1em;} .visi-misi-title {position: absolute; top: 10px; right: 1.5rem; font-size: 0.9rem; font-weight: 600; color: #333;} .legalitas-list li::before {content: '✓'; color: #1e90ff; font-weight: bold; display: inline-block; width: 1em; margin-left: -1em;} .tenaga-pengajar-section {margin-top: 3rem; margin-bottom: 3rem; position: relative;} .tenaga-pengajar-section h4 {position: absolute; top: -0.5rem; right: 0; font-size: 0.9rem; font-weight: 600; color: #333;} .pengajar-grid {background-color: #ffffff; border: 1px solid #cce0ff; border-radius: 8px; padding: 2rem 1.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: grid; grid-template-columns: repeat(5, 1fr); gap: 1.5rem; justify-items: center;} .pengajar-card {text-align: center; display: flex; flex-direction: column; align-items: center;} .pengajar-card img {width: 80px; height: 80px; border-radius: 50%; border: 3px solid #e6f0ff; object-fit: cover; margin-bottom: 0.5rem;} .pengajar-card span {font-size: 0.8rem; font-weight: 600; color: #333; text-transform: uppercase;} .alumni-section {margin-top: 4rem;} .alumni-section h4 {font-family: 'Pacifico', cursive; font-size: 2rem; color: #333; text-align: center; margin-bottom: 2rem;} .alumni-grid {display: flex; gap: 20px; overflow-x: auto; padding-bottom: 1rem; justify-content: center;} .alumni-card {flex: 0 0 300px; background-color: #ffffff; border: 1px solid #cce0ff; border-radius: 8px; padding: 1rem; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; min-height: 150px; margin-right: 1rem;} .alumni-card.large {flex: 0 0 450px; background-color: #e6f0ff;} .alumni-info {display: flex; align-items: center; margin-bottom: 0.5rem;} .alumni-info img {width: 50px; height: 50px; border-radius: 50%; margin-right: 10px; object-fit: cover;} .alumni-name-job span {display: block; font-size: 0.8rem; color: #666;} .alumni-card p.quote {font-size: 0.9rem; line-height: 1.5; color: #333; font-style: italic;}
    
        /* MEDIA QUERY */
        @media (max-width: 800px) {
            .about-block, .legalitas-content {flex-direction: column; flex-wrap: wrap; padding: 1rem;}
            .about-block img {width: 100%; margin-right: 0; margin-bottom: 1rem; max-width: 100%;} 
            .legalitas-content {flex-direction: column-reverse;}
            .legalitas-image {width: 100%; margin: 0 auto 1rem 0; max-width: 100%;}
            .program-grid {flex-direction: column; flex-wrap: wrap; gap: 15px;}
            .program-card {min-width: 100%;}
            .top-header {padding: 0.75rem 1rem; flex-wrap: nowrap; gap: 10px; position: relative;} .top-header .logo {width: 45px; height: 45px; margin: 0;} .top-header .header-content {position: static; transform: none; left: auto; top: auto; text-align: left; padding: 0; width: auto; margin-left: 10px;} .top-header h2 {font-size: 1.1rem;} .top-header h3, .top-header .tagline {font-size: 0.7rem;} .navbar {padding: 0.5rem 0.5rem;} .navbar .nav-links a {font-size: 0.8rem; padding: 0.5rem 0.5rem;} .container {margin-top: 1rem;} .pengajar-grid {grid-template-columns: repeat(3, 1fr); gap: 1rem;} .pengajar-card img {width: 60px; height: 60px;} .alumni-grid {justify-content: flex-start; padding: 0 1rem;} .alumni-card {flex: 0 0 250px;} .alumni-card.large {flex: 0 0 350px;}
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
            <a href="tentang.php" class="active">Tentang</a>
            <a href="/ebook">E-book</a>
            <a href="/pendaftaran">Pendaftaran</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>

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
                    <p class="quote">Kata-kata hari ini. Yang sudah selesai, boleh pulang.</p>
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
    
</body>
</html>