<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Homeschooling</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* --- Reset & Pengaturan Dasar --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem 0;
        }

        /* --- Kontainer Login --- */
        .login-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 2rem;
        }

        /* --- Grup Input (Label + Input) --- */
        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 600;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        /* --- Tombol Login & EFEK HOVER --- */
        .login-button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            background-color: #4A90E2; /* Warna biru */
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-button:hover {
            background-color: #357ABD;
            transform: translateY(-2px);
        }

        /* --- Pemisah "Atau" --- */
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            color: #aaa;
            margin: 1.5rem 0;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .separator span {
            padding: 0 0.75rem;
            font-size: 0.9rem;
        }

        /* --- Tombol Login Google --- */
        .google-login-button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #ffffff;
            color: #555;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease, box-shadow 0.2s ease;
        }

        .google-login-button:hover {
            background-color: #f9f9f9;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .google-logo {
            width: 20px;
            height: 20px;
            margin-right: 12px;
        }

        /* --- Link Tambahan (Lupa Password, dll) --- */
        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
        }

        .links a {
            color: #4A90E2;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .links a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="login-container">
        
        <h2>📚 Login Akun</h2>

        <form action="home.php" method="POST">
            
            <div class="input-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="login-button">Masuk</button>
        </form>

        <div class="separator">
            <span>atau masuk dengan</span>
        </div>

        <a href="/auth/google" class="google-login-button">
            
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="google-logo">
            Lanjutkan dengan Google
        </a>


        <div class="links">
            <a href="/lupa-password">Lupa Password?</a>
            <a href="regitser.php">Buat Akun Baru</a>
        </div>

    </div>
    
</body>
</html>