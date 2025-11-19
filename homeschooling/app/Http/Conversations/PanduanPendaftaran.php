<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class PanduanPendaftaran extends Conversation
{
    protected $namaUser;

    // 1. Langkah Pertama: Tanya Nama
    public function askNama()
    {
        $this->ask('Halo! 👋 Selamat datang di Homeschooling Carnation Cirebon. Boleh tahu nama Anda/Kakak?', function(Answer $answer) {
            $this->namaUser = $answer->getText();
            $this->say("Salam kenal, Kak " . $this->namaUser . "! 😊");
            $this->say("Saya asisten virtual HSCC yang siap membantu menjawab pertanyaan seputar sekolah kami.");
            $this->askMenuUtama();
        });
    }

    // 2. Menu Utama (Smart Regex Match)
    public function askMenuUtama()
    {
        $question = Question::create('Apa yang ingin Kakak ketahui? (Silakan klik tombol atau ketik pertanyaan sendiri)')
            ->fallback('Maaf, saya tidak mengerti.')
            ->callbackId('menu_utama')
            ->addButtons([
                Button::create('🏫 Profil & Visi Misi')->value('profil'),
                Button::create('🎓 Jenjang & Legalitas')->value('legalitas'),
                Button::create('📚 Program Belajar (SaC/LoS)')->value('metode'),
                Button::create('🏆 Fasilitas & Keunggulan')->value('fasilitas'),
                Button::create('💰 Biaya Pendidikan')->value('biaya'),
                Button::create('📝 Cara & Syarat Daftar')->value('daftar'),
                Button::create('📍 Alamat Lokasi')->value('alamat'),
                Button::create('❤️ Konsultasi (ABK/Bullying)')->value('curhat'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $text = strtolower($answer->getText());
            $value = $answer->isInteractiveMessageReply() ? $answer->getValue() : $text;
            $value = strtolower($value);

            // =================================================================
            // 🧠 LOGIKA KECERDASAN BUATAN (SMART REGEX)
            // =================================================================

            // 1. PROFIL & SEJARAH (BARU)
            if (preg_match('/(profil|sejarah|tentang|siapa|visi|misi|kapan|berdiri)/', $value)) {
                $this->infoProfil();
            }

            // 2. LEGALITAS & JENJANG
            elseif (preg_match('/(legal|ijazah|resmi|sah|diakui|negara|kuliah|ptn|negeri|polisi|tni|dapodik|paket|jenjang|sd|smp|sma|kurikulum)/', $value)) {
                $this->infoLegalitas();
            }

            // 3. METODE BELAJAR (SaC / LoS)
            elseif (preg_match('/(metode|belajar|program|sac|los|komunitas|mandiri|online|offline|tatap muka|jam|waktu|bebas|guru)/', $value)) {
                $this->infoMetode();
            }

            // 4. FASILITAS (BARU)
            elseif (preg_match('/(fasilitas|gedung|perpus|olahraga|ruang|kelas|ac|nyaman)/', $value)) {
                $this->infoFasilitas();
            }

            // 5. BIAYA
            elseif (preg_match('/(biaya|harga|bayar|duit|spp|uang|murah|mahal|pricelist|cicil)/', $value)) {
                $this->infoBiaya();
            }

            // 6. ALAMAT
            elseif (preg_match('/(alamat|lokasi|dimana|tempat|map|kantor|cabang)/', $value)) {
                $this->infoAlamat();
            }

            // 7. CARA & SYARAT DAFTAR
            elseif (preg_match('/(daftar|register|gabung|masuk|syarat|dokumen|berkas|pindah|mutasi)/', $value)) {
                $this->infoDaftar();
            }

            // 8. CURHAT
            elseif (preg_match('/(curhat|abk|khusus|inklusi|bully|aman|introvert|malu|takut|lambat|konsultasi)/', $value)) {
                $this->infoCurhat();
            }

            // 9. ADMIN / WHATSAPP
            elseif (preg_match('/(admin|orang|manusia|wa|whatsapp|telepon|nomor)/', $value)) {
                $this->infoAdmin();
            }

            // FALLBACK
            else {
                $this->say("Waduh, maaf Kak " . $this->namaUser . ", saya belum mengerti pertanyaan itu.. 😅");
                $this->say("Coba gunakan kata kunci seperti: **'Profil'**, **'Biaya'**, **'Syarat'**, atau **'Lokasi'**.");
                $this->askMenuUtama();
            }
        });
    }

    // --- DATABASE JAWABAN (KNOWLEDGE BASE) ---

    public function infoProfil()
    {
        $this->say("🏫 **Profil Homeschooling Carnation (HSCC):**");
        $this->say("Kami adalah lembaga pendidikan non-formal (PKBM) resmi (NPSN P9945774) di bawah naungan Yayasan Anyelir Daun.\n\n"
            . "🗓️ **Sejarah:** Berdiri sejak 2008 (awal sebagai cabang HS Kak Seto), dan mandiri sebagai HSCC sejak 2015. Kami adalah homeschooling pertama di Cirebon!\n\n"
            . "🌟 **Visi:** Terwujudnya generasi cerdas, berkarakter, dan memiliki life skills dalam lingkungan yang ramah.");
        $this->tanyaLagi();
    }

    public function infoLegalitas()
    {
        $this->say("🎓 **Jenjang & Legalitas:**");
        $this->say("Legalitas kami **100% RESMI** dan diakui negara (Setara Sekolah Formal). Lulusan bisa lanjut kuliah (PTN/PTS), TNI/Polri, atau kerja.\n\n"
            . "📚 **Jenjang Pendidikan:**\n"
            . "✅ Paket A (Setara SD)\n"
            . "✅ Paket B (Setara SMP)\n"
            . "✅ Paket C (Setara SMA - IPA/IPS)\n\n"
            . "Kami menggunakan **Kurikulum Merdeka**.");
        $this->tanyaLagi();
    }

    public function infoMetode()
    {
        $this->say("📚 **Program & Metode Belajar:**");
        $this->say("Kami menawarkan fleksibilitas sesuai kebutuhan anak (via asesmen awal):\n\n"
            . "1. **SaC (Study at Class):** Belajar di sekolah dengan suasana 'Homey Class' yang nyaman. Rasio siswa kecil (1:10) agar fokus.\n"
            . "2. **LoS (Learning on Site):** Tutor datang ke rumah siswa. Jadwal fleksibel (3-4x seminggu).\n\n"
            . "Pendekatan kami **Ramah Anak** dan berbasis minat bakat.");
        $this->tanyaLagi();
    }

    public function infoFasilitas()
    {
        $this->say("🏆 **Fasilitas HSCC:**");
        $this->say("Untuk mendukung kenyamanan belajar, kami menyediakan:\n"
            . "• Ruang kelas nyaman (Full AC & konsep rumahan)\n"
            . "• Perpustakaan\n"
            . "• Fasilitas Olahraga\n"
            . "• Layanan Konsultasi Psikologi & Minat Bakat (Asesmen Awal)");
        $this->tanyaLagi();
    }

    public function infoBiaya()
    {
        $this->say("💰 **Biaya Pendidikan:**");
        $this->say("Biaya kami terjangkau dan transparan. Sudah termasuk modul pembelajaran.\n"
            . "• Bisa **dicicil** bulanan.\n"
            . "• Ada diskon khusus (misal kakak-adik).");
        $this->say('Untuk rincian **Pricelist** terbaru tahun ini, silakan chat Admin kami: <a href="https://wa.me/6281323717184" target="_blank">📞 Minta Pricelist via WA</a>');
        $this->tanyaLagi();
    }

    public function infoAlamat()
    {
        $this->say("📍 **Lokasi Kami:**");
        $this->say("1️⃣ **HSCC 1 (Pusat):**\nJl. Ciremai Raya No. E 12, Perumnas Kelurahan Kecapi, Harjamukti, Cirebon.\n\n"
            . "2️⃣ **HSCC 2:**\nRuko Berry Green, Komplek CSB Mall No. 21, Cirebon.");
        $this->say("Silakan kunjungi lokasi terdekat yaaa! 😊");
        $this->tanyaLagi();
    }

    public function infoDaftar()
    {
        $this->say("📝 **Cara & Syarat Daftar:**");
        
        $this->say("**Cara Daftar:**\n"
            . "1. **Online:** Isi formulir di sini 👉 <a href='" . route('daftar.online') . "' target='_blank'>Formulir Pendaftaran</a>\n"
            . "2. **Offline:** Datang langsung ke kantor HSCC 1 atau HSCC 2.");
            
        $this->say("**Syarat Berkas:**\n"
            . "• Scan/Foto KK & Akta Kelahiran\n"
            . "• Scan/Foto Ijazah/SKHUN (jika ada)\n"
            . "• Data diri & Data Orang Tua");

        $this->say("Mau coba gratis dulu? <a href='" . route('daftar.trial') . "' target='_blank'>Daftar Trial Class</a>");
        $this->tanyaLagi();
    }

    public function infoCurhat()
    {
        $this->say("❤️ **Layanan Inklusi & Personal:**");
        $this->say("Kami menerima siswa dengan berbagai latar belakang:\n"
            . "• **Inklusi (ABK):** Hak belajar yang sama dengan pendampingan khusus.\n"
            . "• **Korban Bullying:** Lingkungan anti-bullying dan kekeluargaan.\n"
            . "• **Minat Khusus:** Atlet/Artis yang butuh waktu fleksibel.");
        $this->tanyaLagi();
    }

    public function infoAdmin()
    {
        $this->say("Baik, silakan lanjut mengobrol dengan Admin manusia kami di WhatsApp:");
        $this->say('<a href="https://wa.me/6281323717184" target="_blank">📞 Chat WhatsApp Admin</a>');
        $this->tanyaLagi();
    }

    // 3. Loop / Tanya Lagi
    public function tanyaLagi()
    {
        $question = Question::create('<br>Ada lagi yang ingin Kak ' . $this->namaUser . ' tanyakan?')
            ->addButtons([
                Button::create('Mau Tanya Topik Lain')->value('ya'),
                Button::create('Sudah Cukup')->value('tidak'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $text = strtolower($answer->getText());
            $value = $answer->isInteractiveMessageReply() ? $answer->getValue() : $text;

            if (preg_match('/(ya|mau|lagi|boleh)/', $value)) {
                $this->askMenuUtama();
            } else {
                $this->say("Baik, terima kasih Kak " . $this->namaUser . "! Semoga harimu menyenangkan. 😊");
                $this->say("Jangan ragu untuk menghubungi kami lagi nanti.");
            }
        });
    }

    public function run()
    {
        $this->askNama();
    }
}