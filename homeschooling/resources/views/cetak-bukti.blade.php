@extends('layouts.main')

@section('title', 'Bukti Pendaftaran Online')

@section('content')
<main class.="container">
    <div style="text-align: center; margin: 2rem 0;">
        <button id="printButton" class="btn btn-next" style="padding: 1rem 2rem; font-size: 1.2rem;">
            Cetak Bukti Pendaftaran
        </button>
    </div>

    <div class="printable-area" style="width: 210mm; max-width: 98%; margin: 0 auto; background-color: #ffffff; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); box-sizing: border-box; padding: 25mm;">

        <header class="header" style="text-align: center; border-bottom: 3px double #000; padding-bottom: 1rem;">
            <h1 style="margin: 0; font-size: 1.5rem; font-weight: 700;">FORMULIR PENDAFTARAN SISWA BARU</h1>
            <h2 style="margin: 0; font-size: 1.8rem; font-weight: 700; color: #d90429;">HOMESCHOOLING CARNATION CIREBON</h2>
        </header>

        <h2 class="document-title" style="text-align: center; font-size: 1.2rem; font-weight: 600; text-decoration: underline; margin-top: 1.5rem; margin-bottom: 2rem;">
            BUKTI PENDAFTARAN ONLINE
        </h2>

        <style>
            .data-section { margin-bottom: 2rem; }
            .data-section h3 { background-color: #f4f4f4; padding: 0.5rem; font-size: 1.1rem; border-bottom: 2px solid #ddd; }
            .data-table { width: 100%; border-collapse: collapse; }
            .data-table tr td { padding: 0.6rem; border: 1px solid #ddd; font-size: 0.95rem; }
            .data-table tr td:first-child { font-weight: 600; width: 30%; background-color: #fafafa; }
            .consent-section { margin-top: 2rem; font-size: 0.9rem; font-style: italic; color: #555; border-top: 1px solid #eee; padding-top: 1rem; }

            /* CSS KHUSUS CETAK */
            @media print {
                /* Sembunyikan semua kecuali area cetak */
                body * { visibility: hidden; }
                .printable-area, .printable-area * { visibility: visible; }
                .printable-area { position: absolute; left: 0; top: 0; width: 100%; margin: 0; padding: 10mm; box-shadow: none; border: none; }
                .data-section { page-break-inside: avoid; }
            }
        </style>

        <section class="data-section">
            <h3>Data Diri Siswa</h3>
            <table class="data-table">
                <tr> <td>Nama Lengkap</td> <td>{{ $pendaftar->nama_lengkap }}</td> </tr>
                <tr> <td>Nama Panggilan</td> <td>{{ $pendaftar->nama_panggilan }}</td> </tr>
                <tr> <td>NIK</td> <td>{{ $pendaftar->nik }}</td> </tr>
                <tr> <td>Tempat, Tgl Lahir</td> <td>{{ $pendaftar->tempat_lahir }}, {{ $pendaftar->tanggal_lahir }}</td> </tr>
                <tr> <td>Jenis Kelamin</td> <td>{{ $pendaftar->jenis_kelamin }}</td> </tr>
                <tr> <td>Agama</td> <td>{{ $pendaftar->agama }}</td> </tr>
                <tr> <td>Warga Negara</td> <td>{{ $pendaftar->warga_negara }}</td> </tr>
            </table>
        </section>

        <section class="data-section">
            <h3>Data Akademik & Kontak</h3>
            <table class="data-table">
                <tr> <td>Sekolah Asal</td> <td>{{ $pendaftar->sekolah_asal }}</td> </tr>
                <tr> <td>NISN</td> <td>{{ $pendaftar->nisn }}</td> </tr>
                <tr> <td>Tingkat</td> <td>{{ $pendaftar->tingkat }}</td> </tr>
                <tr> <td>Program Pilihan</td> <td>{{ $pendaftar->program_hs }}</td> </tr>
                <tr> <td>Email (Orang Tua)</td> <td>{{ $pendaftar->email_ortu }}</td> </tr>
                <tr> <td>Telp./HP</td> <td>{{ $pendaftar->telp_hp_ortu }}</td> </tr>
                <tr> <td>Alamat</td> <td>{{ $pendaftar->alamat }}</td> </tr>
            </table>
        </section>

        <section class="data-section">
            <h3>Data Orang Tua / Wali</h3>
            <table class="data-table">
                <tr> <td>Nama Ayah</td> <td>{{ $pendaftar->nama_ayah }}</td> </tr>
                <tr> <td>Nama Ibu</td> <td>{{ $pendaftar->nama_ibu }}</td> </tr>
                <tr> <td>Nama Wali</td> <td>{{ $pendaftar->nama_wali }}</td> </tr>
            </table>
        </section>

        <section class="consent-section">
            <p>Data ini telah dikirimkan pada {{ $pendaftar->created_at->format('d F Y \p\u\k\u\l H:i') }} oleh {{ $pendaftar->user->name }} ({{ $pendaftar->user->email }}).</p>
        </section>

    </div> </main>

<script>
    // Sembunyikan navbar & banner saat mencetak
    document.getElementById('printButton').addEventListener('click', () => {
        // Ambil navbar dan banner
        const headerBanner = document.querySelector('.header-banner');
        const navbar = document.querySelector('.navbar');
        const printButton = document.getElementById('printButton');

        // Sembunyikan mereka
        if (headerBanner) headerBanner.style.display = 'none';
        if (navbar) navbar.style.display = 'none';
        if (printButton) printButton.style.display = 'none';

        // Jalankan print
        window.print();

        // Tampilkan lagi setelah selesai (atau jika dibatalkan)
        if (headerBanner) headerBanner.style.display = 'block';
        if (navbar) navbar.style.display = 'flex';
        if (printButton) printButton.style.display = 'block';
    });
</script>
@endsection