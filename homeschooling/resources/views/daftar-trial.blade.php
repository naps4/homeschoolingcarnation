@extends('layouts.main')

@section('title', 'Formulir Daftar Trial')

@section('content')
    <div class="form-container">
        <div class="form-header trial">
            <a href="{{ route('home') }}" class="back-link">&lt; Kembali</a>
            <h2>FORMULIR DAFTAR TRIAL</h2>
            <p>HOMESCHOOLING CARNATION CIREBON</p>
        </div>

        <div class="progress-bar">
            </div>

        <form id="multiStepForm" action="/proses-daftar-trial" method="POST">
            </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // (Sisa script multi-step Anda...)
        });
    </script>
@endsection