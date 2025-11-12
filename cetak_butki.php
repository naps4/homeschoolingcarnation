<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran - [Nama Siswa]</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- 1. Style untuk Tampilan di Layar --- */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e9e9e9; /* Latar abu-abu agar 'kertas' terlihat */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 0;
        }

        /* Tombol Cetak, hanya terlihat di layar */
        .print-button {
            padding: 0.75rem 2rem;
            margin-bottom: 1.5rem;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .print-button:hover {
            background-color: #357ABD;
        }

        /* Area 'Kertas' untuk dicetak */
        .printable-area {
            width: 210mm; /* Lebar kertas A4 */
            max-width: 98%;
            min-height: 297mm; /* Tinggi kertas A4 (opsional) */
            padding: 25mm; /* Margin standar dokumen */
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-sizing: border-box; /* Agar padding tidak menambah lebar */
        }
        
        /* Kop Surat */
        .header {
            text-align: center;
            border-bottom: 3px double #000;
            padding-bottom: 1rem;
        }
        .header h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }
        .header h2 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 700;
            color: #d90429; /* Warna merah */
        }

        /* Judul Dokumen */
        .document-title {
            text-align: center;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: underline;
            margin-top: 1.5rem;
            margin-bottom: 2rem;
        }

        /* Tabel Data */
        .data-section {
            margin-bottom: 2rem;
        }
        .data-section h3 {
            background-color: #f4f4f4;
            padding: 0.5rem;
            font-size: 1.1rem;
            border-bottom: 2px solid #ddd;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .data-table tr td {
            padding: 0.6rem;
            border: 1px solid #ddd;
            font-size: 0.95rem;
        }
        
        /* Label (Kolom Kiri) */
        .data-table tr td:first-child {
            font-weight: 600;
            width: 30%;
            background-color: #fafafa;
        }
        
        /* Persetujuan */
        .consent-section {
            margin-top: 2rem;
            font-size: 0.9rem;
            font-style: italic;
            color: #555;
            border-top: 1px solid #eee;
            padding-top: 1rem;
        }


        /* --- 2. Style Khusus Saat Mencetak (PENTING!) --- */
        @media print {
            /* Sembunyikan semua elemen di body */
            body * {
                visibility: hidden;
            }
            
            /* Kecualikan area cetak dan isinya */
            .printable-area, .printable-area * {
                visibility: visible;
            }
            
            /* Posisikan area cetak agar pas di kertas */
            .printable-area {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
                box-shadow: none;
                border: none;
                /* Atur margin cetak A4 */
                padding: 20mm; 
            }
            
            /* Sembunyikan tombol cetak saat mencetak */
            .print-button {
                display: none;
            }
            
            /* Pastikan tidak ada halaman pecah di tengah tabel */
            .data-section {
                page-break-inside: avoid;
            }
        }

    </style>
</head>
<body>

    <button id="printButton" class="print-button">Cetak Bukti Pendaftaran</button>

    <div class="printable-area">
        
        <header class="header">
            <h1>FORMULIR PENDAFTARAN SISWA BARU</h1>
            <h2>HOMESCHOOLING CARNATION CIREBON</h2>
        </header>

        <h2 class="document-title">BUKTI PENDAFTARAN ONLINE</h2>
        
        <section class="data-section">
            <h3>Data Diri Siswa</h3>
            <table class="data-table">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>[Nama Lengkap Siswa]</td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>[Nama Panggilan]</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>[3271xxxxxxxxxxxx]</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>[Tempat Lahir], [Tanggal Lahir]</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>[Jenis Kelamin]</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>[Agama]</td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td>[Warga Negara]</td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>[Gol. Darah]</td>
                </tr>
            </table>
        </section>
        
        <section class="data-section">
            <h3>Data Akademik & Kontak</h3>
            <table class="data-table">
                <tr>
                    <td>Sekolah Asal</td>
                    <td>[Nama Sekolah Asal]</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>[1234567890]</td>
                </tr>
                <tr>
                    <td>Tingkat Terakhir</td>
                    <td>[Tingkat]</td>
                </tr>
                <tr>
                    <td>Program Pilihan</td>
                    <td>[Program Homeschooling]</td>
                </tr>
                <tr>
                    <td>Email (Orang Tua)</td>
                    <td>[email@orangtua.com]</td>
                </tr>
                <tr>
                    <td>Telp./HP (WhatsApp)</td>
                    <td>[081234567890]</td>
                </tr>
                <tr>
                    <td>Alamat Domisili</td>
                    <td>[Alamat Lengkap Domisili Siswa]</td>
                </tr>
            </table>
        </section>

        <section class="data-section">
            <h3>Data Orang Tua / Wali</h3>
            <table class="data-table">
                <tr>
                    <td>Nama Ayah</td>
                    <td>[Nama Ayah]</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>[Nama Ibu]</td>
                </tr>
                <tr>
                    <td>Nama Wali</td>
                    <td>[Nama Wali (jika ada)]</td>
                </tr>
            </table>
        </section>
        
        <section class="consent-section">
            <p>Saya yang mengisi formulir ini menyatakan bahwa data yang saya kirimkan adalah benar dan dapat dipertanggungjawabkan.</p>
        </section>

    </div> <script>
        // Cari tombolnya
        const printBtn = document.getElementById('printButton');
        
        // Tambahkan event saat di-klik
        printBtn.addEventListener('click', () => {
            // Jalankan fungsi cetak bawaan browser
            window.print();
        });
    </script>

</body>
</html>