<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Homeschooling</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacifico&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        /* --- Reset & Pengaturan Dasar --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* Font Poppins untuk teks standar/konten */
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f8; 
            min-height: 100vh;
        }
        
        /* =====================================
        == KODE BARU: TOP HEADER MERAH 
        ===================================== */
        .top-header {
            /* Warna merah pekat seperti di gambar */
            background-color: #d11e1f; 
            color: #ffffff;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            /* Jarak antara logo dan teks */
            gap: 15px; 
        }

        .top-header .logo {
            width: 50px; /* Ukuran default logo */
            height: 50px;
            /* Pastikan logo diletakkan di tengah secara vertikal jika ukurannya berbeda */
            align-self: flex-start; 
        }

        .top-header .header-content {
            flex-grow: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .top-header h3 {
            /* SELAMAT DATANG DI WEBSITE - Menggunakan font kecil (Pacifico kurang terbaca) */
            font-family: 'Poppins', sans-serif; 
            font-size: 0.7rem; 
            font-weight: 400;
            margin: 0;
            line-height: 1;
        }

        .top-header h2 {
            /* HOMESCHOOLING CARNATION CIREBON - Font tebal */
            font-family: 'Oswald', sans-serif;
            font-size: 1.4rem; 
            font-weight: 700;
            margin: 0;
            line-height: 1.1;
        }

        .top-header .tagline {
            /* "Menyenangkan, Cerdas, dan Sukses" */
            font-family: 'Pacifico', cursive; /* Menggunakan font tulisan tangan */
            font-size: 0.9rem;
            font-weight: 400;
            margin-top: 5px;
        }
        
        /* =====================================
        == AKHIR KODE BARU: TOP HEADER MERAH
        ===================================== */


        /* == HEADER BANNER (PENSIL) == */
        .header-banner {
            height: 150px;
            background-color: #f0f0f0;
            background-image: url('https://images.unsplash.com/photo-1512294156643-4879c3c1268f?w=1200&h=300&fit=crop');
            background-size: cover;
            background-position: center;
        }

        /* == NAVBAR (PUTIH) == */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.75rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar .nav-links {
            display: flex;
            gap: 2rem;
        }

        .navbar .nav-links a {
            text-decoration: none;
            color: #444;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.5rem 0.25rem;
            border-bottom: 3px solid transparent;
            transition: border-color 0.3s ease;
        }
        
        .navbar .nav-links a:hover {
            color: #000;
            border-bottom-color: #4A90E2;
        }
        
        .navbar .nav-links a.logout-link {
            color: #dc3545;
        }
        .navbar .nav-links a.logout-link:hover {
            border-bottom-color: #dc3545;
        }
        
        /* == KONTEN UTAMA == */
        .container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }
        
        .welcome-header {
            margin-bottom: 2rem; 
            text-align: center;
        }
        
        .welcome-header h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 2.8rem; 
            color: #222;
            font-weight: 700;
            text-transform: uppercase;
        }
        
        .welcome-header p {
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem;
            color: #444;
            margin-top: 0.5rem;
        }

        /* =====================================
        == CSS UNTUK TOMBOL           ==
        ===================================== */
        .cta-section {
            display: flex;
            justify-content: center; 
            align-items: center;
            gap: 2rem; 
            flex-wrap: wrap; 
            margin-top: 2rem; 
            padding: 2rem 0;
            border-top: 1px solid #ddd; 
        }
        
        .cta-button {
            padding: 0.8rem 2.5rem;
            border-radius: 50px; 
            text-decoration: none;
            color: #ffffff;
            
            font-family: 'Oswald', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
            
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-3px); 
            box-shadow: 0 6px 15px rgba(0,0,0,0.25);
        }

        /* Tombol Merah */
        .btn-red {
            background-color: #ff0000; 
        }
        .btn-red:hover {
            background-color: #d90000; 
        }

        /* Tombol Hijau */
        .btn-green {
            background-color: #00ff00; 
        }
        .btn-green:hover {
            background-color: #00d900; 
        }


        /* --- Media Query untuk Responsif --- */
        @media (max-width: 600px) {
             /* Perubahan pada Top Header Merah di HP */
            .top-header {
                padding: 0.75rem 1rem;
                /* Agar teks besar tidak terpotong, susun ke bawah */
                flex-wrap: wrap; 
                text-align: center;
            }
             .top-header .logo {
                width: 40px; 
                height: 40px;
                 /* Posisikan logo di tengah saat wrapping */
                margin: 0 auto; 
            }
            .top-header .header-content {
                width: 100%;
            }
            .top-header h2 {
                font-size: 1.1rem;
            }
            .top-header h3, .top-header .tagline {
                font-size: 0.7rem;
            }
            
            .header-banner {
                height: 100px;
            }
            .navbar {
                padding: 0.5rem 1rem;
            }
            .navbar .nav-links {
                gap: 1rem;
                justify-content: center;
                flex-wrap: wrap;
            }
            .navbar .nav-links a {
                font-size: 0.9rem;
            }
            
            .welcome-header h1 {
                font-size: 2rem; 
            }
            .welcome-header p {
                font-size: 1.5rem; 
            }

            /* Tombol di HP */
            .cta-section {
                flex-direction: column; 
                gap: 1rem;
            }
            .cta-button {
                width: 80%; 
                text-align: center;
            }
        }

    </style>
</head>
<body>

    <div class="top-header">
        <img src="" alt="Logo Homeschooling Carnation Cirebon" class="logo">
        <div class="header-content">
            <h3>SELAMAT DATANG DI WEBSITE</h3> 
            <h2>HOMESCHOOLING CARNATION CIREBON</h2>
            <p class="tagline">"Menyenangkan, Cerdas, dan Sukses"</p>
        </div>
    </div>
    <header class="header-banner">
        </header>

    <nav class="navbar">
        <div class="nav-links">
            <a href="/dashboard">Dashboard</a>
            <a href="/profil-saya">Profil Saya</a>
            <a href="/materi-belajar">Materi Belajar</a>
            <a href="/logout" class="logout-link">Logout</a>
        </div>
    </nav>

    <main class="container">
        
        <header class="welcome-header">
            <h1>HOMESCHOOLING CARNATION CIREBON</h1>
            <p>Menyenangkan, Cerdas & Sukses</p>
        </header>

        <section class="dashboard-grid">
            </section>
        
        <section class="cta-section">
            <a href="daftar_online.php" class="cta-button btn-red">DAFTAR ONLINE</a>
            <a href="daftar_trial.php" class="cta-button btn-green">DAFTAR TRIAL</a>
        </section>

    </main>
    
</body>
</html>