@extends('layouts.main')

@section('title', 'Daftar Akun Baru')

@section('body-class', 'auth-page-body')

@section('content')
    <div class="register-container">
        <h2>Buat Akun Homeschooling</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <label for="nama">Nama Lengkap Anda (Orang Tua/Wali)</label>
                <input type="text" id="nama" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <label for="password">Buat Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <label for="konfirmasi_password">Konfirmasi Password</label>
                <input type="password" id="konfirmasi_password" name="password_confirmation" required>
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="consent-group">
                <input type="checkbox" id="persetujuan" name="persetujuan" required>
                <label for="persetujuan">
                    Saya telah membaca dan setuju dengan 
                    <a href="/syarat-ketentuan" target="_blank">Syarat & Ketentuan</a> 
                    serta 
                    <a href="/kebijakan-privasi" target="_blank">Kebijakan Privasi</a>.
                </label>
            </div>
            <button type="submit" class="register-button">Buat Akun Saya</button>
        </form>
        
        <div class="separator">
            <span>atau daftar dengan</span>
        </div>
        <a href="{{ route('google.login') }}" class="google-login-button">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="google-logo">
            Lanjutkan dengan Google
        </a>
        <div class="footer-link">
            <a href="{{ route('login') }}">Sudah punya akun? Masuk di sini</a>
        </div>
    </div>
@endsection