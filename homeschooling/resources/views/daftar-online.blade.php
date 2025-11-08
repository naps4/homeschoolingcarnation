@extends('layouts.main')

@section('title', 'Formulir Pendaftaran Online')

@section('content')
    <div class="form-container">
        <div class="form-header">
            <a href="{{ route('home') }}" class="back-link">&lt; Kembali</a>
            <h2>FORMULIR PENDAFTARAN</h2>
            <p>HOMESCHOOLING CARNATION CIREBON</p>
        </div>

        <div class="progress-bar">
            </div>

        <form id="multiStepForm" action="cetak_butki.php" method="POST" enctype="multipart/form-data">
            </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // (Sisa script multi-step Anda...)
        });
    </script>
@endsection