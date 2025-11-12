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
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f8; 
            min-height: 100vh;
        }
        
        header {
            width: 100%;
        }

        /* =====================================
        == TOP HEADER MERAH (LOGO KIRI, TEKS TENGAH ABSOLUT) 
        ===================================== */
        .top-header {
            background-color: #d11e1f; 
            color: #ffffff;
            padding: 1.2rem 1.5rem; 
            display: flex;
            align-items: center; 
            position: relative; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Bayangan sedikit dikurangi agar rapi */
            /* Garis bawah dari gambar */
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
        
        /* == HEADER BANNER DIHAPUS, CSS INI TIDAK DIPERLUKAN LAGI ==
        .header-banner {
            height: 150px;
            background-image: url('URL_PENSIL');
        }
        */

        /* == NAVBAR (PUTIH) == */
        .navbar {
            background-color: #ffffff;
            /* Box-shadow agar terlihat pemisah yang rapi */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            display: flex;
            justify-content: center; 
            align-items: center;
            padding: 0.75rem 2rem;
            
            /* Pastikan tidak ada margin atas yang memisahkan dari top-header */
            margin-top: 0; 
            position: static; /* Biarkan posisi normal (tidak sticky) */
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
        
        .navbar .nav-links a:hover {
            color: #d11e1f; 
            border-bottom-color: #d11e1f;
        }

        /* == KONTEN UTAMA == */
        .container {
            max-width: 1100px;
            /* Jarak atas kontainer dikurangi, karena navbar sudah rapat */
            margin: 1.5rem auto; 
            padding: 0 1.5rem;
        }
        
        .welcome-header {
            margin-bottom: 2rem; 
            text-align: center;
        }
        
        /* --- Media Query untuk Responsif --- */
        @media (max-width: 800px) {
            .top-header {
                padding: 0.75rem 1rem;
                flex-wrap: nowrap; 
                gap: 10px;
                position: relative; 
            }
             .top-header .logo {
                width: 45px; 
                height: 45px;
                margin: 0;
            }
            .top-header .header-content {
                position: static; 
                transform: none;
                left: auto;
                top: auto;
                text-align: left; 
                padding: 0;
                width: auto;
                margin-left: 10px; /* Jarak agar tidak menabrak logo di HP */
            }
            
             .top-header h2 {
                font-size: 1.1rem; 
            }
            .top-header h3, .top-header .tagline {
                font-size: 0.7rem;
            }
            
            .navbar {
                padding: 0.5rem 0.5rem;
            }
            .navbar .nav-links a {
                font-size: 0.8rem; 
                padding: 0.5rem 0.5rem;
            }
            
            .container {
                margin-top: 1rem;
            }
        }
        
        /* CSS tombol, dll. (tidak berubah) */
        .welcome-header h1 {font-family: 'Oswald', sans-serif;font-size: 2.8rem;color: #222;font-weight: 700;text-transform: uppercase;}
        .welcome-header p {font-family: 'Pacifico', cursive;font-size: 1.8rem;color: #444;margin-top: 0.5rem;}
        .cta-section {display: flex;justify-content: center;align-items: center;gap: 2rem;flex-wrap: wrap;margin-top: 2rem;padding: 2rem 0;border-top: 1px solid #ddd;}
        .cta-button {padding: 0.8rem 2.5rem;border-radius: 50px;text-decoration: none;color: #ffffff;font-family: 'Oswald', sans-serif;font-size: 1.1rem;font-weight: 700;text-shadow: 1px 1px 3px rgba(0,0,0,0.4);box-shadow: 0 4px 10px rgba(0,0,0,0.15);transition: all 0.3s ease;}
        .cta-button:hover {transform: translateY(-3px);box-shadow: 0 6px 15px rgba(0,0,0,0.25);}
        .btn-red {background-color: #ff0000;}
        .btn-red:hover {background-color: #d90000;}
        .btn-green {background-color: #00ff00;}
        .btn-green:hover {background-color: #00d900;}

    </style>
</head>
<body>

    <header>
        <div class="top-header">
            <img src="" alt="Logo Homeschooling Carnation Cirebon" class="logo">
            <div class="header-content">
                <h3>SELAMAT DATANG DI WEBSITE</h3> 
                <h2>HOMESCHOOLING CARNATION CIREBON</h2>
                <p class="tagline">"Menyenangkan, Cerdas, dan Sukses"</p>
            </div>
            </div>
        
        </header>

    <nav class="navbar">
        <div class="nav-links">
            <a href="/tentang">Tentang</a>
            <a href="/ebook">E-book</a>
            <a href="/pendaftaran">Pendaftaran</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>
    
</body>
</html>