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
        header { width: 100%; }

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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            border-bottom: 6px solid #a81819; 
        }

        .top-header .logo {
            width: 85px; height: 85px; flex-shrink: 0; z-index: 2; 
        }

        .top-header .header-content {
            position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); 
            text-align: center; width: 100%; padding: 0 120px; box-sizing: border-box; z-index: 1;
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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            padding: 0.75rem 2rem;
            position: sticky; top: 0; z-index: 100;
        }

        .navbar-container {
            max-width: 1100px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;
        }

        .nav-menu { display: flex; gap: 1.5rem; align-items: center; }
        .nav-auth { display: flex; gap: 1rem; align-items: center; }

        .navbar a, .navbar button {
            text-decoration: none; color: #222; font-weight: 600; font-size: 1rem;
            padding: 0.5rem 0; border-bottom: 3px solid transparent;
            transition: all 0.3s ease; cursor: pointer; font-family: 'Poppins', sans-serif;
        }
        
        .nav-menu a:hover, .nav-menu a.active { color: #d11e1f; border-bottom-color: #d11e1f; }

        .nav-auth a.login-btn { 
            background-color: #4A90E2; color: white; padding: 0.5rem 1.5rem; border-radius: 50px; 
        }
        .nav-auth a.login-btn:hover { background-color: #357ABD; border-bottom: 3px solid transparent; transform: translateY(-2px); }
        
        .nav-auth a.register-btn {
            color: #4A90E2; border: 2px solid #4A90E2; padding: 0.4rem 1.4rem; border-radius: 50px;
        }
        .nav-auth a.register-btn:hover { background-color: #4A90E2; color: white; border-bottom: 3px solid transparent; }

        .nav-auth button.logout-btn { 
            background: none; border: 2px solid #dc3545; color: #dc3545; 
            padding: 0.4rem 1.2rem; border-radius: 50px; font-weight: 600;
        }
        .nav-auth button.logout-btn:hover { background-color: #dc3545; color: white; border-bottom: 3px solid transparent; }

        /* =====================================
           3. CONTAINER & UTILS
        ===================================== */
        .container { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
        
        /* -- PERBAIKAN: Wrapper untuk Login/Register -- */
        /* Ini membuat form ada di tengah layar TANPA merusak header */
        .auth-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 280px); /* Tinggi layar dikurangi tinggi header */
            padding: 2rem 0;
        }

        /* --- Styles untuk Welcome Page --- */
        .welcome-header { margin-bottom: 2rem; text-align: center; }
        .welcome-header h1 { font-family: 'Oswald', sans-serif; font-size: 2.8rem; color: #222; font-weight: 700; text-transform: uppercase; }
        .welcome-header p { font-family: 'Pacifico', cursive; font-size: 1.8rem; color: #444; margin-top: 0.5rem; }
        .cta-section { display: flex; justify-content: center; gap: 2rem; margin-top: 3rem; }
        .cta-button { padding: 1rem 3rem; border-radius: 50px; text-decoration: none; color: white !important; font-family: 'Oswald', sans-serif; font-size: 1.2rem; font-weight: 700; text-shadow: 1px 1px 2px rgba(0,0,0,0.3); box-shadow: 0 5px 15px rgba(0,0,0,0.15); transition: transform 0.3s; }
        .cta-button:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0,0,0,0.25); }
        .btn-red { background-color: #ff0000; } .btn-green { background-color: #00c853; }

        /* --- Styles untuk Form (Login/Reg/Daftar) --- */
        .login-container, .register-container, .form-container {
            background-color: #ffffff; padding: 2.5rem; border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 90%; max-width: 400px; margin: 0 auto;
        }
        .form-container { max-width: 750px; } /* Form daftar lebih lebar */
        
        h2 { text-align: center; color: #333; margin-bottom: 2rem; font-weight: 700; }
        .input-group { margin-bottom: 1.5rem; }
        .input-group label { display: block; margin-bottom: 0.5rem; font-weight: 600; color: #555; }
        .input-group input, .input-group select, .input-group textarea { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; background-color: #fafafa; font-size: 1rem; }
        
        /* Tombol Form Umum */
        .btn, .login-button, .register-button { width: 100%; padding: 0.8rem; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; color: white; text-align: center; display: inline-block; transition: 0.3s; }
        .login-button { background-color: #4A90E2; } .login-button:hover { background-color: #357ABD; }
        .register-button { background-color: #28a745; } .register-button:hover { background-color: #218838; }
        .btn-next { background-color: #4A90E2; } .btn-prev { background-color: #aaa; } .btn-submit { background-color: #28a745; }

        /* Google Button */
        .google-login-button { display: flex; justify-content: center; align-items: center; width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; background: white; color: #555; font-weight: 600; text-decoration: none; margin-bottom: 1rem; transition: 0.3s; }
        .google-login-button:hover { background: #f9f9f9; }
        .google-logo { width: 20px; margin-right: 10px; }
        .separator { display: flex; align-items: center; text-align: center; color: #aaa; margin: 1.5rem 0; }
        .separator::before, .separator::after { content: ''; flex: 1; border-bottom: 1px solid #ddd; }
        .separator span { padding: 0 10px; font-size: 0.9rem; }
        .links { display: flex; justify-content: space-between; font-size: 0.9rem; margin-top: 1rem; }

        /* Progress Bar & Form Step (Daftar) */
        .progress-bar { display: flex; justify-content: space-between; padding: 1.5rem 2rem; border-bottom: 1px solid #ddd; margin-bottom: 2rem; }
        .progress-step { display: flex; flex-direction: column; align-items: center; font-size: 0.8rem; color: #aaa; width: 25%; text-align: center; }
        .progress-step.active { color: #d90429; }
        .step-number { width: 30px; height: 30px; border-radius: 50%; background-color: #eee; display: flex; justify-content: center; align-items: center; margin-bottom: 0.5rem; }
        .progress-step.active .step-number { background-color: #d90429; color: white; }
        .form-step { display: none; } .form-step.active { display: block; animation: fadeIn 0.5s; }
        .form-row { display: flex; gap: 1rem; } .form-row .input-group { width: 50%; }
        .button-group { display: flex; justify-content: space-between; margin-top: 2rem; }
        .btn { width: auto; padding: 0.75rem 2rem; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        /* Responsive */
        @media (max-width: 800px) {
            .top-header { flex-wrap: wrap; justify-content: center; text-align: center; padding: 1rem; }
            .top-header .header-content { position: static; transform: none; padding: 0; margin-top: 1rem; }
            .navbar-container { flex-direction: column; gap: 1rem; }
            .nav-menu, .nav-auth { width: 100%; justify-content: center; flex-wrap: wrap; }
            .form-row { flex-direction: column; } .form-row .input-group { width: 100%; }
            .cta-section { flex-direction: column; } .cta-button { width: 100%; }
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body> <header>
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
                <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang Kami</a>
            </div>

            <div class="nav-auth">
                @auth
                    <span style="color: #666; font-weight: 600; font-size: 0.9rem;">Halo, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                    <a href="{{ route('register') }}" class="register-btn">Daftar</a>
                @endauth
            </div>
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
            desktopHeight: 450, desktopWidth: 370
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>