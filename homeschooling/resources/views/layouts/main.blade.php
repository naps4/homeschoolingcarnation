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
        /* (SEMUA CSS ANDA DARI FILE INI SEBELUMNYA) */
        /* ... (Saya singkat agar tidak terlalu panjang, 
           pastikan semua CSS Anda dari file sebelumnya ada di sini) ... */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background-color: #f4f4f8; min-height: 100vh; }
        .header-banner { height: 150px; background-color: #f0f0f0; background-image: url('https://images.unsplash.com/photo-1512294156643-4879c3c1268f?w=1200&h=300&fit=crop'); background-size: cover; background-position: center; }
        .navbar { background-color: #ffffff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); display: flex; justify-content: center; align-items: center; padding: 0.75rem 2rem; position: sticky; top: 0; z-index: 100; }
        .navbar .nav-links { display: flex; gap: 2rem; align-items: center; }
        .navbar .nav-links a, .navbar .nav-links button { text-decoration: none; color: #444; font-weight: 600; font-size: 0.95rem; padding: 0.5rem 0.25rem; border-bottom: 3px solid transparent; transition: border-color 0.3s ease; background: none; border: none; cursor: pointer; font-family: 'Poppins', sans-serif; }
        .navbar .nav-links a:hover, .navbar .nav-links button:hover { color: #000; border-bottom-color: #4A90E2; }
        .navbar .nav-links a.login-btn { background-color: #4A90E2; color: white; padding: 0.5rem 1.2rem; border-radius: 5px; border-bottom: none; }
        .navbar .nav-links a.login-btn:hover { background-color: #357ABD; color: white; border-bottom: none; }
        .navbar .nav-links button.logout-btn { color: #dc3545; }
        .navbar .nav-links button.logout-btn:hover { border-bottom-color: #dc3545; }
        
        .container { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
        .welcome-header { margin-bottom: 2rem; text-align: center; }
        .welcome-header h1 { font-family: 'Oswald', sans-serif; font-size: 2.8rem; color: #222; font-weight: 700; text-transform: uppercase; }
        .welcome-header p { font-family: 'Pacifico', cursive; font-size: 1.8rem; color: #444; margin-top: 0.5rem; }
        .cta-section { display: flex; justify-content: center; align-items: center; gap: 2rem; flex-wrap: wrap; margin-top: 2rem; padding: 2rem 0; border-top: 1px solid #ddd; }
        .cta-button { padding: 0.8rem 2.5rem; border-radius: 50px; text-decoration: none; color: #ffffff; font-family: 'Oswald', sans-serif; font-size: 1.1rem; font-weight: 700; text-shadow: 1px 1px 3px rgba(0,0,0,0.4); box-shadow: 0 4px 10px rgba(0,0,0,0.15); transition: all 0.3s ease; }
        .cta-button:hover { transform: translateY(-3px); box-shadow: 0 6px 15px rgba(0,0,0,0.25); }
        .btn-red { background-color: #ff0000; } .btn-red:hover { background-color: #d90000; }
        .btn-green { background-color: #00ff00; } .btn-green:hover { background-color: #00d900; }

        /* (CSS untuk Login/Register) */
        .auth-page-body { display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 1rem 0; }
        .login-container { background-color: #ffffff; padding: 2.5rem; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); width: 90%; max-width: 400px; }
        .login-container h2 { text-align: center; color: #333; margin-bottom: 2rem; }
        .input-group { margin-bottom: 1.5rem; }
        .input-group label { display: block; margin-bottom: 0.5rem; color: #555; font-weight: 600; }
        .input-group input { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; font-family: 'Poppins', sans-serif; }
        .login-button { width: 100%; padding: 0.75rem; border: none; border-radius: 5px; background-color: #4A90E2; color: white; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; }
        .login-button:hover { background-color: #357ABD; transform: translateY(-2px); }
        .separator { display: flex; align-items: center; text-align: center; color: #aaa; margin: 1.5rem 0; }
        .separator::before, .separator::after { content: ''; flex: 1; border-bottom: 1px solid #ddd; }
        .separator span { padding: 0 0.75rem; font-size: 0.9rem; }
        .google-login-button { display: flex; justify-content: center; align-items: center; width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; background-color: #ffffff; color: #555; font-size: 0.95rem; font-weight: 600; cursor: pointer; text-decoration: none; transition: background-color 0.3s ease, box-shadow 0.2s ease; }
        .google-login-button:hover { background-color: #f9f9f9; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .google-logo { width: 20px; height: 20px; margin-right: 12px; }
        .links { display: flex; justify-content: space-between; margin-top: 1.5rem; }
        .links a { color: #4A90E2; text-decoration: none; font-size: 0.9rem; }
        .links a:hover { text-decoration: underline; }
        .register-container { background-color: #ffffff; padding: 2.5rem; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); width: 90%; max-width: 450px; }
        .register-container h2 { text-align: center; color: #333; margin-bottom: 2rem; }
        .register-button { width: 100%; padding: 0.75rem; border: none; border-radius: 5px; background-color: #28a745; color: white; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; }
        .register-button:hover { background-color: #218838; transform: translateY(-2px); }
        .register-button:disabled { background-color: #ccc; cursor: not-allowed; transform: none; }
        .footer-link { text-align: center; margin-top: 1.5rem; }
        .footer-link a { color: #4A90E2; text-decoration: none; font-size: 0.9rem; font-weight: 600; }
        .footer-link a:hover { text-decoration: underline; }
        .error-message { color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; }
        .consent-group { display: flex; align-items: flex-start; margin-top: 1.5rem; margin-bottom: 1.5rem; }
        .consent-group input[type="checkbox"] { width: 1.25em; height: 1.25em; margin-top: 0.15em; margin-right: 0.75rem; flex-shrink: 0; }
        .consent-group label { font-size: 0.85rem; color: #555; line-height: 1.5; }

        /* (CSS untuk Form Pendaftaran) */
        .form-container { width: 90%; max-width: 750px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); overflow: hidden; margin: 2rem auto; }
        .form-header { background-color: #d90429; color: white; padding: 1.5rem; text-align: center; position: relative; }
        .form-header.trial { background-color: #00b4d8; } /* Warna beda untuk trial */
        .form-header h2 { margin: 0; font-weight: 700; }
        .form-header p { margin: 0; font-size: 0.9rem; opacity: 0.9; }
        .back-link { position: absolute; top: 50%; left: 1.5rem; transform: translateY(-50%); color: white; text-decoration: none; font-size: 0.9rem; font-weight: 600; padding: 8px 12px; border-radius: 5px; transition: background-color 0.3s ease; }
        .back-link:hover { background-color: rgba(0, 0, 0, 0.2); }
        .progress-bar { display: flex; justify-content: space-between; padding: 1.5rem 2rem; border-bottom: 1px solid #ddd; }
        .progress-step { display: flex; flex-direction: column; align-items: center; font-size: 0.8rem; color: #aaa; width: 25%; text-align: center; }
        .progress-step.trial { width: 50%; } /* Hanya 2 step */
        .step-number { width: 30px; height: 30px; border-radius: 50%; background-color: #eee; border: 2px solid #ddd; display: flex; justify-content: center; align-items: center; font-weight: 600; margin-bottom: 0.5rem; transition: all 0.3s ease; }
        .progress-step.active { color: #d90429; }
        .progress-step.active.trial { color: #00b4d8; }
        .progress-step.active .step-number { background-color: #d90429; color: white; border-color: #d90429; }
        .progress-step.active.trial .step-number { background-color: #00b4d8; border-color: #00b4d8; }
        form { padding: 2rem; }
        .form-step { display: none; }
        .form-step.active { display: block; }
        .form-step h3 { text-align: center; color: #333; margin-bottom: 1.5rem; border-bottom: 2px solid #f0f0f0; padding-bottom: 0.5rem; }
        .form-row { display: flex; gap: 1.5rem; }
        .form-row .input-group { width: 50%; }
        .button-group { display: flex; justify-content: space-between; margin-top: 2rem; }
        .btn { padding: 0.75rem 2rem; border: none; border-radius: 5px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease; }
        .btn-prev { background-color: #aaa; color: white; }
        .btn-prev:hover { background-color: #888; }
        .btn-next { background-color: #4A90E2; color: white; }
        .btn-next:hover { background-color: #357ABD; }
        .btn-submit { background-color: #28a745; color: white; }
        .btn-submit:hover { background-color: #218838; }

        /* (CSS Responsif) */
        @media (max-width: 600px) {
            /* (CSS responsif Anda ada di sini...) */
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@yield('body-class')">

    <header class="header-banner">
    </header>

    <nav class="navbar">
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="#">Tentang Kami</a>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="login-btn">Login</a>
                <a href="{{ route('register') }}">Daftar Akun</a>
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
</body>
</html>