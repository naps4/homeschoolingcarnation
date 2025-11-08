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
        
        /* =====================================
        == PERUBAHAN FONT DI SINI          ==
        =====================================
        */
        .welcome-header {
            margin-bottom: 2rem; /* Tambah jarak ke tombol */
            text-align: center;
        }
        
        .welcome-header h1 {
            /* MENGGUNAKAN FONT 'OSWALD' YANG TEGAS */
            font-family: 'Oswald', sans-serif;
            font-size: 2.8rem; /* Sedikit lebih besar */
            color: #222;
            font-weight: 700;
            text-transform: uppercase;
        }
        
        .welcome-header p {
            /* MENGGUNAKAN FONT 'PACIFICO' (TULISAN TANGAN) */
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem; /* Dibuat lebih besar agar terbaca */
            color: #444;
            margin-top: 0.5rem;
        }

        /* =====================================
        == CSS UNTUK TOMBOL           ==
        =====================================
        */
        .cta-section {
            display: flex;
            justify-content: center; /* Tombol di tengah */
            align-items: center;
            gap: 2rem; /* Jarak antar tombol */
            flex-wrap: wrap; /* Tombol akan turun ke bawah di HP */
            margin-top: 2rem; /* Jarak dari header */
            padding: 2rem 0;
            border-top: 1px solid #ddd; /* Garis pemisah */
        }
        
        .cta-button {
            padding: 0.8rem 2.5rem;
            border-radius: 50px; /* Membuat bentuk lonjong/pill */
            text-decoration: none;
            color: #ffffff;
            
            /* Menggunakan font 'Oswald' agar sama tebalnya */
            font-family: 'Oswald', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            
            /* Efek bayangan pada teks (seperti di gambar) */
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
            
            /* Efek bayangan pada tombol (agar terlihat 'mengambang') */
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-3px); /* Efek terangkat saat di-hover */
            box-shadow: 0 6px 15px rgba(0,0,0,0.25);
        }

        /* Tombol Merah */
        .btn-red {
            background-color: #ff0000; /* Merah menyala */
        }
        .btn-red:hover {
            background-color: #d90000; /* Merah sedikit gelap */
        }

        /* Tombol Hijau */
        .btn-green {
            background-color: #00ff00; /* Hijau menyala */
        }
        .btn-green:hover {
            background-color: #00d900; /* Hijau sedikit gelap */
        }


        /* --- Media Query untuk Responsif --- */
        @media (max-width: 600px) {
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
                font-size: 2rem; /* Ukuran font di HP */
            }
            .welcome-header p {
                font-size: 1.5rem; /* Ukuran font di HP */
            }

            /* Tombol di HP */
            .cta-section {
                flex-direction: column; /* Susun tombol ke bawah */
                gap: 1rem;
            }
            .cta-button {
                width: 80%; /* Lebar tombol di HP */
                text-align: center;
            }
        }

    </style>
</head>
<body>

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