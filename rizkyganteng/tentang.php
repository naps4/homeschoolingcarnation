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
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background-color: #f4f4f8; min-height: 100vh; }
        
        /* =====================================
           WRAPPER AGAR HEADER & NAVBAR STICKY
        ===================================== */
        .sticky-header-wrapper {
            position: sticky;
            top: 0;
            z-index: 1000; /* Pastikan di atas elemen lain */
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Efek melayang */
        }

        /* =====================================
           1. HEADER UTAMA (MERAH)
        ===================================== */
        .top-header {
            background-color: #d11e1f; 
            color: #ffffff;
            padding: 2.5rem 1.5rem; 
            display: flex;
            align-items: center; 
            position: relative; 
            /* Border bawah dihapus/disesuaikan karena ada navbar di bawahnya */
            border-bottom: 4px solid #a81819; 
        }

        .top-header .logo {
            width: 85px; 
            height: 85px; 
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
            padding: 0 120px; 
            box-sizing: border-box;
            z-index: 1;
        }

        .top-header h3 {
            font-family: 'Poppins', sans-serif; font-size: 1rem; font-weight: 400; margin: 0; line-height: 1; margin-bottom: 8px; letter-spacing: 1.5px;
        }
        .top-header h2 {
            font-family: 'Oswald', sans-serif; font-size: 2.2rem; font-weight: 700; margin: 0; line-height: 1.1;
        }
        .top-header .tagline {
            font-family: 'Pacifico', cursive; font-size: 1.1rem; font-weight: 400; margin-top: 8px; opacity: 0.95;
        }

        /* =====================================
           2. NAVBAR BERSIH (PUTIH)
        ===================================== */
        .navbar {
            background-color: #ffffff;
            /* Shadow dipindah ke sticky-wrapper */
            /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */ 
            padding: 0.75rem 2rem;
            /* Position sticky dihapus dari sini karena sudah di wrapper */
        }

        .navbar-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            gap: 1.5rem; 
            align-items: center;
        }

        /* --- PERBAIKAN JARAK TOMBOL LOGIN & REGISTER --- */
        .nav-auth {
            display: flex;
            gap: 2rem; /* JARAK DIPERLEBAR (Dari 1rem ke 2rem) */
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none; color: #222; font-weight: 600; font-size: 1rem;
            padding: 0.5rem 0; border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .nav-menu a:hover, .nav-menu a.active {
            color: #d11e1f; border-bottom-color: #d11e1f;
        }

        /* Style Auth Buttons */
        .nav-auth a.login-btn { 
            text-decoration: none; background-color: #4A90E2; color: white; 
            padding: 0.6rem 2rem; /* Padding sedikit ditambah */
            border-radius: 50px; font-weight: 600; transition: 0.3s;
        }
        .nav-auth a.login-btn:hover { background-color: #357ABD; transform: translateY(-2px); }
        
        .nav-auth a.register-btn {
            text-decoration: none; color: #4A90E2; border: 2px solid #4A90E2;
            padding: 0.5rem 1.8rem; /* Padding sedikit ditambah */
            border-radius: 50px; font-weight: 600; transition: 0.3s;
        }
        .nav-auth a.register-btn:hover { background-color: #4A90E2; color: white; }

        .nav-auth button.logout-btn { 
            background: none; border: 2px solid #dc3545; color: #dc3545; 
            padding: 0.4rem 1.2rem; border-radius: 50px; font-weight: 600; cursor: pointer; transition: 0.3s; font-family: 'Poppins', sans-serif;
        }
        .nav-auth button.logout-btn:hover { background-color: #dc3545; color: white; }

        /* =====================================
           3. STYLE GLOBAL & FORMULIR
        ===================================== */
        .container { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
        .welcome-header { margin-bottom: 2rem; text-align: center; }
        .welcome-header h1 { font-family: 'Oswald', sans-serif; font-size: 2.8rem; color: #222; font-weight: 700; text-transform: uppercase; }
        .welcome-header p { font-family: 'Pacifico', cursive; font-size: 1.8rem; color: #444; margin-top: 0.5rem; }
        .cta-section { display: flex; justify-content: center; gap: 2rem; margin-top: 3rem; }
        .cta-button { padding: 1rem 3rem; border-radius: 50px; text-decoration: none; color: #ffffff; font-family: 'Oswald', sans-serif; font-size: 1.2rem; font-weight: 700; text-shadow: 1px 1px 2px rgba(0,0,0,0.3); box-shadow: 0 5px 15px rgba(0,0,0,0.15); transition: transform 0.3s; }
        .cta-button:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0,0,0,0.25); }
        .btn-red { background-color: #ff0000; } .btn-green { background-color: #00c853; }

        /* Form Styles */
        .form-container { width: 90%; max-width: 750px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); overflow: hidden; margin: 2rem auto; }
        .form-header { background-color: #d90429; color: white; padding: 1.5rem; text-align: center; position: relative; }
        .form-header.trial { background-color: #00b4d8; }
        .form-header h2 { margin: 0; font-weight: 700; font-size: 1.5rem; }
        .back-link { position: absolute; top: 50%; left: 1.5rem; transform: translateY(-50%); color: white; text-decoration: none; font-weight: 600; padding: 5px 10px; border-radius: 5px; transition: 0.3s; }
        .back-link:hover { background-color: rgba(0,0,0,0.2); }

        .progress-bar { display: flex; justify-content: space-between; padding: 1.5rem 2rem; border-bottom: 1px solid #ddd; }
        .progress-step { display: flex; flex-direction: column; align-items: center; font-size: 0.8rem; color: #aaa; width: 25%; text-align: center; }
        .progress-step.trial { width: 50%; }
        .step-number { width: 30px; height: 30px; border-radius: 50%; background-color: #eee; border: 2px solid #ddd; display: flex; justify-content: center; align-items: center; font-weight: 600; margin-bottom: 0.5rem; }
        .progress-step.active { color: #d90429; }
        .progress-step.active.trial { color: #00b4d8; }
        .progress-step.active .step-number { background-color: #d90429; color: white; border-color: #d90429; }
        .progress-step.active.trial .step-number { background-color: #00b4d8; border-color: #00b4d8; }

        form { padding: 2rem; }
        .form-step { display: none; }
        .form-step.active { display: block; animation: fadeIn 0.5s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        .input-group { margin-bottom: 1.25rem; }
        .input-group label { display: block; margin-bottom: 0.5rem; font-weight: 600; color: #555; }
        .input-group input, .input-group select, .input-group textarea { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; font-family: 'Poppins', sans-serif; background-color: #fafafa; transition: border-color 0.3s ease; }
        .input-group input:focus, .input-group select:focus, .input-group textarea:focus { outline: none; border-color: #4A90E2; box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1); }
        .form-row { display: flex; gap: 1.5rem; }
        .form-row .input-group { width: 50%; }

        .button-group { display: flex; justify-content: space-between; margin-top: 2rem; }
        .btn { padding: 0.75rem 2rem; border: none; border-radius: 5px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; color: white; display: inline-block; text-align: center; }
        .btn-prev { background-color: #aaa; } .btn-prev:hover { background-color: #888; transform: translateY(-2px); }
        .btn-next { background-color: #4A90E2; } .btn-next:hover { background-color: #357ABD; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(74, 144, 226, 0.3); }
        .btn-next:disabled, .btn-next.disabled { background-color: #ccc; cursor: not-allowed; transform: none; box-shadow: none; opacity: 0.7; }
        .btn-submit { background-color: #28a745; } .btn-submit:hover { background-color: #218838; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3); }

        .input-error { border-color: #d32f2f !important; background-color: #fff8f8; }
        .client-error { color: #d32f2f; font-size: 0.85rem; margin-top: 4px; min-height: 18px; }
        .server-error { color: #d32f2f; font-size: 0.85rem; margin-top: 4px; font-weight: bold; }

        /* Auth Page Specifics */
        .auth-page-body { display: flex; justify-content: center; align-items: center; min-height: 80vh; }
        .login-container, .register-container { background-color: #ffffff; padding: 2.5rem; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); width: 90%; max-width: 400px; margin: 0 auto; }
        .register-container { max-width: 450px; }
        .login-container h2, .register-container h2 { text-align: center; color: #333; margin-bottom: 2rem; }
        .login-button, .register-button { width: 100%; padding: 0.75rem; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; color: white; transition: 0.3s; }
        .login-button { background-color: #4A90E2; } .register-button { background-color: #28a745; }
        .separator { display: flex; align-items: center; text-align: center; color: #aaa; margin: 1.5rem 0; }
        .separator::before, .separator::after { content: ''; flex: 1; border-bottom: 1px solid #ddd; }
        .separator span { padding: 0 0.75rem; font-size: 0.9rem; }
        .google-login-button { display: flex; justify-content: center; align-items: center; width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; background-color: white; color: #555; font-weight: 600; text-decoration: none; }
        .google-logo { width: 20px; margin-right: 10px; }
        .links, .footer-link { display: flex; justify-content: space-between; margin-top: 1.5rem; }
        .footer-link { justify-content: center; }
        .links a, .footer-link a { color: #4A90E2; text-decoration: none; font-size: 0.9rem; }
        .consent-group { display: flex; align-items: flex-start; margin-top: 1.5rem; margin-bottom: 1.5rem; }
        .consent-group input { width: auto; margin-right: 0.5rem; }

        /* Responsive */
        @media (max-width: 800px) {
            .top-header { padding: 0.75rem 1rem; flex-wrap: nowrap; gap: 10px; justify-content: flex-start; }
            .top-header .logo { width: 45px; height: 45px; margin: 0; }
            .top-header .header-content { position: static; transform: none; left: auto; top: auto; text-align: left; padding: 0; width: auto; margin-left: 10px; }
            .top-header h2 { font-size: 1.1rem; } .top-header h3, .top-header .tagline { font-size: 0.7rem; }
            
            /* Navbar Mobile */
            .navbar { padding: 0.5rem; }
            .navbar-container { flex-direction: column; gap: 1rem; }
            .nav-menu { flex-wrap: wrap; justify-content: center; gap: 1rem; }
            .nav-auth { flex-wrap: wrap; justify-content: center; gap: 0.5rem; }
            
            .cta-section { flex-direction: column; gap: 1rem; } .cta-button { width: 80%; text-align: center; }
            .form-row { flex-direction: column; gap: 0; } .form-row .input-group { width: 100%; }
            .form-header { padding-top: 3.5rem; padding-bottom: 1rem; }
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="@yield('body-class')">

    <div class="sticky-header-wrapper">
        
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
            <div class="navbar-container">
                <div class="nav-menu">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('daftar.online') }}" class="{{ request()->routeIs('daftar.*') ? 'active' : '' }}">Pendaftaran</a>
                    <a href="#">Tentang Kami</a>
                </div>

                <div class="nav-auth">
                    @auth
                        <span style="color: #666; font-weight: 600; font-size: 0.9rem;">
                            Halo, {{ Auth::user()->name }}
                        </span>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-btn">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="login-btn">Login</a>
                        <a href="{{ route('register') }}" class="register-btn">Daftar Akun</a>
                    @endauth
                </div>
            </div>
        </nav>

    </div> @if (session('status'))
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
            desktopHeight: 450, desktopWidth: 370
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>
</html>