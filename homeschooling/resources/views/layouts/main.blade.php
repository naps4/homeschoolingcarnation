<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homeschooling Carnation')</title>

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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
            border-bottom: 5px solid #a81819; 
        }

        /* Logo */
        .top-header .logo {
            width: 60px; 
            height: auto; /* Agar proporsional */
            flex-shrink: 0; 
            z-index: 2; 
        }

        /* Konten Teks Tengah */
        .top-header .header-content {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%); 
            text-align: center; 
            width: 100%; 
            padding: 0 100px; /* Agar tidak menabrak logo */
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
            letter-spacing: 1px;
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
        
        /* =====================================
        == NAVBAR (PUTIH - MENU LOGIN)       ==
        ===================================== */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            display: flex;
            justify-content: center; 
            align-items: center;
            padding: 0.75rem 2rem;
            position: static; 
            z-index: 100;
        }
        
        .navbar .nav-links {
            display: flex;
            gap: 1rem; /* Beri jarak antar tombol */
            align-items: center;
        }

        .navbar .nav-links a, 
        .navbar .nav-links button {
            text-decoration: none;
            color: #222; 
            font-weight: 600;
            font-size: 1rem;
            padding: 0.5rem 1.2rem; 
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            background: none;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }
        
        .navbar .nav-links a:hover, 
        .navbar .nav-links button:hover {
            color: #d11e1f; 
            border-bottom-color: #d11e1f;
        }

        /* Tombol Logout Spesial */
        .navbar .nav-links button.logout-btn {
            color: #dc3545;
        }
        .navbar .nav-links button.logout-btn:hover {
            background-color: #fff0f0;
            border-bottom-color: transparent;
            border-radius: 5px;
        }

        /* =====================================
        == KONTEN UTAMA & CSS LAINNYA        ==
        ===================================== */
        .container {
            max-width: 1100px;
            margin: 1.5rem auto; 
            padding: 0 1.5rem;
        }
        
        /* Tombol CTA (Daftar Online/Trial) */
        .welcome-header { margin-bottom: 2rem; text-align: center; }
        .welcome-header h1 { font-family: 'Oswald', sans-serif; font-size: 2.8rem; color: #222; font-weight: 700; text-transform: uppercase; }
        .welcome-header p { font-family: 'Pacifico', cursive; font-size: 1.8rem; color: #444; margin-top: 0.5rem; }

        .cta-section { display: flex; justify-content: center; align-items: center; gap: 2rem; flex-wrap: wrap; margin-top: 2rem; padding: 2rem 0; border-top: 1px solid #ddd; }
        .cta-button { padding: 0.8rem 2.5rem; border-radius: 50px; text-decoration: none; color: #ffffff; font-family: 'Oswald', sans-serif; font-size: 1.1rem; font-weight: 700; text-shadow: 1px 1px 3px rgba(0,0,0,0.4); box-shadow: 0 4px 10px rgba(0,0,0,0.15); transition: all 0.3s ease; }
        .cta-button:hover { transform: translateY(-3px); box-shadow: 0 6px 15px rgba(0,0,0,0.25); }
        .btn-red { background-color: #ff0000; } .btn-red:hover { background-color: #d90000; }
        .btn-green { background-color: #00ff00; } .btn-green:hover { background-color: #00d900; }

        /* CSS Auth Pages (Login/Register) */
        .auth-page-body { display: flex; justify-content: center; align-items: center; min-height: 80vh; }
        .login-container, .register-container { background-color: #ffffff; padding: 2.5rem; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); width: 90%; max-width: 400px; margin: 0 auto; }
        .register-container { max-width: 450px; }
        .input-group { margin-bottom: 1.5rem; }
        .input-group label { display: block; margin-bottom: 0.5rem; font-weight: 600; color: #555; }
        .input-group input, .input-group select, .input-group textarea { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; background-color: #fafafa; }
        .login-button, .register-button { width: 100%; padding: 0.75rem; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; color: white; transition: 0.3s; }
        .login-button { background-color: #4A90E2; }
        .register-button { background-color: #28a745; }
        .separator { display: flex; align-items: center; text-align: center; color: #aaa; margin: 1.5rem 0; }
        .separator::before, .separator::after { content: ''; flex: 1; border-bottom: 1px solid #ddd; }
        .separator span { padding: 0 0.75rem; font-size: 0.9rem; }
        .google-login-button { display: flex; justify-content: center; align-items: center; width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; background-color: white; color: #555; font-weight: 600; text-decoration: none; }
        .google-logo { width: 20px; height: 20px; margin-right: 12px; }
        .links, .footer-link { display: flex; justify-content: space-between; margin-top: 1.5rem; }
        .footer-link { justify-content: center; }
        .links a, .footer-link a { color: #4A90E2; text-decoration: none; }
        .error-message { color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; }
        .consent-group { display: flex; align-items: flex-start; margin-top: 1.5rem; margin-bottom: 1.5rem; }
        .consent-group input { width: auto; margin-right: 0.5rem; }

        /* CSS Form Pendaftaran */
        .form-container { width: 90%; max-width: 750px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); overflow: hidden; margin: 2rem auto; }
        .form-header { background-color: #d90429; color: white; padding: 1.5rem; text-align: center; position: relative; }
        .form-header.trial { background-color: #00b4d8; }
        .form-header h2 { margin: 0; font-weight: 700; }
        .back-link { position: absolute; top: 50%; left: 1.5rem; transform: translateY(-50%); color: white; text-decoration: none; font-weight: 600; padding: 5px 10px; border-radius: 5px; }
        .back-link:hover { background-color: rgba(0,0,0,0.2); }
        .progress-bar { display: flex; justify-content: space-between; padding: 1.5rem 2rem; border-bottom: 1px solid #ddd; }
        .progress-step { display: flex; flex-direction: column; align-items: center; font-size: 0.8rem; color: #aaa; width: 25%; text-align: center; }
        .progress-step.trial { width: 50%; }
        .step-number { width: 30px; height: 30px; border-radius: 50%; background-color: #eee; border: 2px solid #ddd; display: flex; justify-content: center; align-items: center; font-weight: 600; margin-bottom: 0.5rem; }
        .progress-step.active { color: #d90429; }
        .progress-step.active.trial { color: #00b4d8; }
        .progress-step.active .step-number { background-color: #d90429; color: white; border-color: #d90429; }
        .progress-step.active.trial .step-number { background-color: #00b4d8; border-color: #00b4d8; }
        .form-row { display: flex; gap: 1.5rem; }
        .form-row .input-group { width: 50%; }
        .button-group { display: flex; justify-content: space-between; margin-top: 2rem; }
        .btn { padding: 0.75rem 2rem; border: none; border-radius: 5px; font-size: 1rem; font-weight: 600; cursor: pointer; }
        .btn-prev { background-color: #aaa; color: white; }
        .btn-next { background-color: #4A90E2; color: white; }
        .btn-submit { background-color: #28a745; color: white; }

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

            .cta-section { flex-direction: column; gap: 1rem; }
            .cta-button { width: 80%; text-align: center; }
            .form-row { flex-direction: column; gap: 0; }
            .form-row .input-group { width: 100%; }
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="@yield('body-class')">

    <header>
        <div class="top-header">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo HSCC" class="logo">
            </a>

            <div class="header-content">
                <h3>SELAMAT DATANG DI WEBSITE</h3> 
                <h2>HOMESCHOOLING CARNATION CIREBON</h2>
                <p class="tagline">"Menyenangkan, Cerdas, dan Sukses"</p>
            </div>
        </div>
    </header>

    <nav class="navbar">
        <div class="nav-links">
            @auth
                <span style="margin-right: 10px; color: #666; font-size: 0.9rem;">Halo, {{ Auth::user()->name }}</span>
                
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Daftar Akun</a>
            @endauth
        </div>
    </nav>

    @if (session('status'))
    <div class="container" style="margin-bottom: -1rem; margin-top: 1rem;">
        <div style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: 1rem; border-radius: 5px; text-align: center; font-weight: 600;">
            {{ session('status') }}
        </div>
    </div>
    @endif

    <main>
        @yield('content')
    </main>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

    <script>
        var botmanWidget = {
            aboutText: 'Homeschooling Carnation',
            introMessage: "Halo! 👋 Saya asisten virtual Homeschooling Carnation. Ketik 'halo' untuk memulai!",
            title: 'Bantuan Pendaftaran',
            mainColor: '#d90429',
            bubbleBackground: '#d90429',
            headerTextColor: '#fff',
            desktopHeight: 450,
            desktopWidth: 370
        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>
</html>