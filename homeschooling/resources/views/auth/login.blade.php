@extends('layouts.main')

@section('title', 'Login Akun')

@section('body-class', 'auth-page-body') 

@section('content')
    <div class="login-container">
        
        @if (session('error'))
            <div class="error-message" style="text-align: center; margin-bottom: 1rem; padding: 1rem; background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; border-radius: 5px;">
                {{ session('error') }}
            </div>
        @endif
        <h2>📚 Login Akun</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group" style="display: flex; align-items: center;">
                <input type="checkbox" id="remember_me" name="remember" style="width: auto; margin-right: 0.5rem;">
                <label for="remember_me" style="margin-bottom: 0;">Ingat Saya</label>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>

        <div class="separator">
            <span>atau masuk dengan</span>
        </div>
        <a href="{{ route('google.login') }}" class="google-login-button">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="google-logo">
            Lanjutkan dengan Google
        </a>
        <div class="links">
            <a href="{{ route('password.request') }}">Lupa Password?</a>
            <a href="{{ route('register') }}">Buat Akun Baru</a>
        </div>
    </div>
@endsection