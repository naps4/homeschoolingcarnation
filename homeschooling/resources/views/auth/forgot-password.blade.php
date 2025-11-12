@extends('layouts.main')

@section('title', 'Lupa Password')

@section('body-class', 'auth-page-body') 

@section('content')
<div class="login-container">
    <h2>Lupa Password Anda?</h2>

    <div style="margin-bottom: 1rem; font-size: 0.9rem; color: #555;">
        Tidak masalah. Masukkan alamat email Anda dan kami akan mengirimkan link untuk mengatur ulang password Anda.
    </div>

    @if (session('status'))
        <div style="margin-bottom: 1rem; font-weight: 600; color: #28a745; background: #e9f7ef; padding: 1rem; border-radius: 5px; text-align: center;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="input-group">
            <label for="email">Alamat Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="login-button" style="background-color: #28a745; width: 100%;">
            Kirim Link Reset Password
        </button>
    </form>
    
    <div class="footer-link" style="text-align: center; margin-top: 1.5rem;">
        <a href="{{ route('login') }}">Kembali ke Login</a>
    </div>
</div>
@endsection