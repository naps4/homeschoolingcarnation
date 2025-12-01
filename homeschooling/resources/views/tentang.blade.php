@extends('layouts.main')

@section('title', 'Tentang Homeschooling - Carnation Cirebon')

@section('content')
<style>
    /* === HANYA UNTUK HALAMAN TENTANG === */

    .about-container {
        max-width: 1100px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }

    .about-section h1,
    .kurikulum-section h1,
    .legalitas-section h1 {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-top: 3rem;
        margin-bottom: 1.5rem;
    }

    .about-block {
        display: flex;
        gap: 1.5rem;
        align-items: flex-start;
        background: #e6f0ff;
        border: 1px solid #cce0ff;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        flex-wrap: wrap;
        }

    .about-block img {
        width: 120px;       
        max-width: 30%;      
        border-radius: 6px;
        object-fit: cover;
        flex-shrink: 0;
    }


    .about-block p {
        flex: 1 1 50%;
        line-height: 1.6;
        color: #444;
        font-size: 0.95rem;
    }

    .img-kurikulum {
        width: 150px;
        max-width: 30%;
        border-radius: 6px;
        object-fit: cover;
    }

    .legalitas-content {
        display: flex;
        gap: 1rem;
        align-items: center;
        background: #e6f0ff;
        border: 1px solid #cce0ff;
        border-radius: 8px;
        padding: 1.5rem;
    }

    .legalitas-list {
        list-style: none;
        padding: 0;
        margin: 0;
        flex: 1;
    }

    .legalitas-list li {
        padding-left: 1.5rem;
        line-height: 2.2;
        color: #444;
        position: relative;
    }

    .legalitas-list li::before {
        content: '✓';
        color: #1e90ff;
        position: absolute;
        left: 0;
    }

    .legalitas-image {
        width: 150px;
        max-width: 35%;
        border-radius: 6px;
        object-fit: cover;
    }

    .program-pendidikan {
        margin-top: 3rem;
        margin-bottom: 3rem;
    }

    .program-pendidikan h4 {
        margin-bottom: 1.25rem;
        font-size: 0.95rem;
        font-weight: 600;
        color: #333;
    }

    .program-grid {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        flex-wrap: nowrap;
    }

    .program-card {
        background: #e6f0ff;
        border: 1px solid #cce0ff;
        border-radius: 8px;
        padding: 1.5rem;
        flex: 1 1 48%;
    }

    .visi-misi-block {
        background-color: #e6f0ff;
        border: 1px solid #cce0ff;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 3rem;
    }

    .visi-misi-block .label {
        font-size: 1.1rem;
        font-weight: 700;
        color: #333;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .visi-misi-block .visi-text {
        text-align: center;
        font-style: italic;
        font-size: 1rem;
        color: #555;
        margin-bottom: 2rem;
        padding: 0 1rem;
    }

    .visi-misi-block .misi-list {
        list-style: none;
        padding-left: 0;
    }

    .visi-misi-block .misi-list li {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #444;
        padding-left: 1.5rem;
        position: relative;
    }

    .visi-misi-block .misi-list li::before {
        content: '•';
        color: #333;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    .tenaga-pengajar-section {
        margin-top: 3rem;
        margin-bottom: 3rem;
    }

    .tenaga-pengajar-section h4 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .pengajar-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 1.5rem;
        background: #ffffff;
        padding: 1.5rem;
        border-radius: 8px;
        border: 1px solid #cce0ff;
    }

    .pengajar-card {
        text-align: center;
    }

    .pengajar-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #e6f0ff;
        margin-bottom: 0.5rem;
    }

    .alumni-section {
        margin-top: 3rem;
        margin-bottom: 3rem;
    }

    .alumni-section h4 {
        font-family: 'Pacifico', cursive;
        font-size: 1.8rem;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .alumni-grid {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding-bottom: 1rem;
    }

    .alumni-card {
        flex: 0 0 300px;
        background: #ffffff;
        padding: 1rem;
        border-radius: 8px;
        border: 1px solid #cce0ff;
    }

    @media (max-width: 900px) {
        .about-block img,
        .img-kurikulum,
        .legalitas-image {
            width: 100%;
            max-width: 100%;
            margin: 0 0 1rem 0;
        }

        .program-grid {
            flex-direction: column;
        }

        .pengajar-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .about-container {
            padding: 0 1rem;
        }
    }
</style>

<div class="about-container">
    {{-- SECTION: TENTANG --}}
    <section class="about-section">
        <h1>TENTANG HOMESCHOOLING</h1>

        <div class="about-block">
            <img src="{{ asset('images/aktivitas.png') }}" alt="Aktivitas Belajar Homeschooling">
            <p>
                Homeschooling adalah sistem pendidikan di mana anak-anak belajar di rumah dengan bimbingan orang tua
                atau tutor profesional. Metode ini menawarkan fleksibilitas tinggi dalam penyesuaian kurikulum, jadwal,
                dan cara belajar sesuai kebutuhan anak. Dengan lingkungan yang nyaman dan dukungan keluarga,
                homeschooling membantu anak belajar lebih efektif sekaligus mengembangkan kemampuan sosial dan akademis.
            </p>
        </div>
    </section>

    {{-- SECTION: VISI MISI --}}
    <section class="visi-misi-section">
        <div class="visi-misi-block">
            <h4 class="label">VISI</h4>
            <p class="visi-text">
                "TERWUJUDNYA GENERASI CERDAS, BERKARAKTER DAN MEMILIKI LIFE SKILLS DALAM LINGKUNGAN PENDIDIKAN YANG
                RAMAH DAN KONDUSIF."
            </p>

            <h4 class="label">MISI</h4>
            <ul class="misi-list">
                <li>Mewujudkan peserta didik dengan kemampuan sesuai standar kurikulum merdeka.</li>
                <li>Menumbuhkan peserta didik yang memiliki nilai-nilai budaya disiplin dan berkarakter.</li>
                <li>Mengembangkan potensi keterampilan peserta didik sesuai minat dan bakat.</li>
                <li>Mewujudkan lingkungan belajar dengan konsep Home Sweet Home.</li>
                <li>Menyediakan layanan pendidikan dengan rasio siswa per kelas 1:10.</li>
                <li>Memberikan hak belajar yang sama bagi siswa dengan kondisi berkebutuhan khusus.</li>
            </ul>
        </div>
    </section>

    {{-- SECTION: KURIKULUM --}}
    <section class="kurikulum-section">
        <h1>KURIKULUM & PENDIDIKAN</h1>

        <div class="about-block">
            <img src="{{ asset('images/kurikulum merdeka.png') }}" alt="Kurikulum Merdeka" class="img-kurikulum">
            <p>
                Sebagai lembaga pendidikan non formal, HSCC menyelenggarakan pendidikan kesetaraan di semua jenjang,
                mulai dari SD hingga SMA. Kami menawarkan paket A setara SD, paket B setara SMP, dan paket C setara SMA
                dengan dua pilihan jurusan, yaitu IPA dan IPS. Lulusan HSCC memiliki kesempatan untuk melanjutkan
                pendidikan ke sekolah formal hingga perguruan tinggi.
            </p>
        </div>

        <div class="program-pendidikan">
            <h4>PROGRAM PENDIDIKAN HSCC</h4>
            <div class="program-grid">
                <div class="program-card">
                    <h5>STUDY AT CLASS (SAC)</h5>
                    <p>
                        Program ini memungkinkan siswa belajar bersama di Gedung HSCC setiap Senin–Kamis pukul
                        08.10–11.30 WIB. Dengan maksimal 10 siswa per kelompok, pembelajaran lebih intensif dan personal.
                    </p>
                </div>
                <div class="program-card">
                    <h5>LEARNING ON SITE (LOS)</h5>
                    <p>
                        Program ini menyediakan tutor yang datang ke rumah dengan jadwal fleksibel sesuai kebutuhan
                        orang tua. Pembelajaran berlangsung 2–3 kali per minggu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: LEGALITAS --}}
    <section class="legalitas-section">
        <h1>LEGALITAS</h1>

        <div class="legalitas-content">
            <ul class="legalitas-list">
                <li>Sudah masuk ke dalam Dinas Pendidikan Kota Cirebon</li>
                <li>Sudah memiliki NPSN (Nomor Pokok Sekolah Nasional)</li>
                <li>Ijazah sudah diakui</li>
                <li>Terakreditasi BAN-PAUD-PNF</li>
            </ul>
            <img src="{{ asset('images/siswa-dengan-legalitas.png') }}"
                 alt="Siswa HSCC dengan bukti legalitas"
                 class="legalitas-image">
        </div>
    </section>

    {{-- SECTION: TENAGA PENGAJAR --}}
    <section class="tenaga-pengajar-section">
        <h4>TENAGA PENGAJAR</h4>
        <div class="pengajar-grid">
            @for ($i = 0; $i < 10; $i++)
                <div class="pengajar-card">
                    <img src="{{ asset('images/logo.png') }}" alt="Foto Guru {{ $i + 1 }}">
                    <span>NAME IS</span>
                </div>
            @endfor
        </div>
    </section>

    {{-- SECTION: ALUMNI --}}
    <section class="alumni-section">
        <h4>Apa kata alumni?</h4>
        <div class="alumni-grid">
            <div class="alumni-card">
                <div class="alumni-info" style="display:flex; align-items:center; gap:10px;">
                    <img src="{{ asset('images/logo.png') }}" alt="Foto Alumni 1"
                         style="width:50px;height:50px;border-radius:50%;">
                    <div class="alumni-name-job">
                        <span>NAME IS</span><br>
                        <small>Jabatan/Job saat ini</small>
                    </div>
                </div>
                <p class="quote" style="font-style:italic;">
                    Kata-kata hari ini. Yang sudah selesai, boleh pulang.
                </p>
            </div>
        </div>
    </section>
</div>
@endsection
