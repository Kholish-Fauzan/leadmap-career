<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan - LEADMAP-Career</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2b7fff;
            text-decoration: none;
        }

        .back-btn {
            padding: 10px 25px;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(43, 127, 255, 0.3);
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.1), rgba(255, 255, 255, 1));
            padding: 60px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            color: #2b7fff;
            margin-bottom: 15px;
        }

        .hero p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        /* Search Box */
        .search-box {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 18px 60px 18px 25px;
            font-size: 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            outline: none;
            transition: all 0.3s;
        }

        .search-box input:focus {
            border-color: #2b7fff;
            box-shadow: 0 0 0 4px rgba(43, 127, 255, 0.1);
        }

        .search-box button {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .search-box button:hover {
            transform: translateY(-50%) scale(1.05);
        }

        /* Quick Links */
        .quick-links {
            padding: 50px 0;
        }

        .quick-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .quick-link-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            cursor: pointer;
        }

        .quick-link-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .quick-link-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.1), rgba(43, 127, 255, 0.05));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: #2b7fff;
        }

        .quick-link-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .quick-link-card p {
            color: #666;
            font-size: 0.95rem;
        }

        /* FAQ Section */
        .faq-section {
            padding: 60px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 40px;
            color: #333;
        }

        .faq-categories {
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .faq-category {
            padding: 10px 25px;
            background: #f0f0f0;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
            color: #666;
        }

        .faq-category:hover,
        .faq-category.active {
            background: #2b7fff;
            color: white;
        }

        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-item {
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-question {
            padding: 20px 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #333;
            transition: all 0.3s;
        }

        .faq-question:hover {
            background: #e9ecef;
        }

        .faq-question.active {
            background: #2b7fff;
            color: white;
        }

        .faq-icon {
            font-size: 1.2rem;
            transition: transform 0.3s;
        }

        .faq-question.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer-content {
            padding: 0 25px 20px 25px;
            color: #666;
            line-height: 1.8;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        /* Support Cards */
        .support-section {
            padding: 60px 0;
        }

        .support-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .support-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .support-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
        }

        .support-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .support-card p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .support-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .support-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            color: #333;
        }

        .support-info-item:last-child {
            margin-bottom: 0;
        }

        .support-info-item i {
            color: #2b7fff;
        }

        .contact-btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 15px;
            transition: all 0.3s;
        }

        .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(43, 127, 255, 0.3);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 40px 0 20px;
            margin-top: 60px;
        }

        .footer-content {
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .quick-links-grid {
                grid-template-columns: 1fr;
            }

            .support-grid {
                grid-template-columns: 1fr;
            }

            .faq-categories {
                gap: 10px;
            }

            .faq-category {
                padding: 8px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="/" class="logo">LEADMAP-Career</a>
                <a href="/" class="back-btn">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Beranda
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero with Search -->
    <section class="hero">
        <div class="container">
            <h1>Pusat Bantuan</h1>
            <p>Temukan jawaban untuk pertanyaan Anda atau hubungi tim support kami</p>
            <div class="search-box">
                <input type="text" placeholder="Cari pertanyaan atau topik..." id="searchInput">
                <button onclick="searchFAQ()">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="quick-links">
        <div class="container">
            <div class="quick-links-grid">
                <div class="quick-link-card" onclick="scrollToSection('faq')">
                    <div class="quick-link-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3>FAQ</h3>
                    <p>Pertanyaan yang sering diajukan seputar platform</p>
                </div>

                <div class="quick-link-card" onclick="scrollToSection('support')">
                    <div class="quick-link-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Dukungan Teknis</h3>
                    <p>Hubungi tim teknis untuk bantuan langsung</p>
                </div>

                <div class="quick-link-card" onclick="window.open('#', '_blank')">
                    <div class="quick-link-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Panduan Lengkap</h3>
                    <p>Dokumentasi dan tutorial penggunaan platform</p>
                </div>

                <div class="quick-link-card" onclick="window.open('#', '_blank')">
                    <div class="quick-link-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Tutorial</h3>
                    <p>Tonton video panduan step-by-step</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="faq-categories">
                <div class="faq-category active" data-category="all">Semua</div>
                <div class="faq-category" data-category="account">Akun & Login</div>
                <div class="faq-category" data-category="assessment">Asesmen</div>
                <div class="faq-category" data-category="technical">Teknis</div>
                <div class="faq-category" data-category="result">Hasil</div>
            </div>

            <div class="faq-container">
                <!-- Account FAQs -->
                <div class="faq-item" data-category="account">
                    <div class="faq-question">
                        <span>Bagaimana cara mendaftar akun di LEADMAP-Career?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Untuk mendaftar akun, klik tombol "Sign Up" di halaman utama. Isi formulir pendaftaran
                            dengan data yang valid termasuk nama lengkap, email, dan nomor telepon. Setelah submit, Anda
                            akan menerima email verifikasi. Klik link verifikasi di email tersebut untuk mengaktifkan
                            akun Anda. Proses pendaftaran hanya membutuhkan waktu 2-3 menit.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="account">
                    <div class="faq-question">
                        <span>Saya lupa password, bagaimana cara reset?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Klik link "Lupa Password" di halaman login. Masukkan email terdaftar Anda, kemudian cek
                            inbox email untuk link reset password. Link berlaku selama 1 jam. Jika tidak menerima email,
                            periksa folder spam/junk atau hubungi support kami di support@leadmap-career.id.
                        </div>
                    </div>
                </div>

                <!-- Assessment FAQs -->
                <div class="faq-item" data-category="assessment">
                    <div class="faq-question">
                        <span>Berapa lama waktu untuk menyelesaikan semua asesmen?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Total waktu untuk menyelesaikan ketiga asesmen adalah sekitar 45 menit: Asesmen Kependidikan
                            (15 menit), Asesmen Psikologi (15 menit), dan Analisis Konten Digital (15 menit). Anda dapat
                            mengerjakan asesmen dalam satu sesi atau membaginya menjadi beberapa sesi terpisah sesuai
                            kenyamanan Anda.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="assessment">
                    <div class="faq-question">
                        <span>Apakah saya bisa mengulang asesmen jika hasilnya kurang memuaskan?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Ya, Anda dapat mengulang asesmen setelah 30 hari dari pengerjaan terakhir. Sistem akan
                            menyimpan hasil terbaik Anda. Namun, perlu diperhatikan bahwa setiap pengulangan akan
                            dikenakan biaya administrasi. Kami menyarankan untuk mempersiapkan diri dengan baik sebelum
                            mengerjakan asesmen.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="assessment">
                    <div class="faq-question">
                        <span>Apa yang terjadi jika koneksi internet terputus saat asesmen?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Sistem kami dilengkapi dengan auto-save yang menyimpan jawaban Anda setiap 30 detik. Jika
                            koneksi terputus, Anda dapat melanjutkan dari pertanyaan terakhir yang tersimpan dengan sisa
                            waktu yang ada. Pastikan menggunakan koneksi internet yang stabil untuk pengalaman terbaik.
                        </div>
                    </div>
                </div>

                <!-- Technical FAQs -->
                <div class="faq-item" data-category="technical">
                    <div class="faq-question">
                        <span>Browser apa yang didukung oleh platform ini?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Platform LEADMAP-Career mendukung browser modern seperti Google Chrome (versi 90+), Mozilla
                            Firefox (versi 88+), Microsoft Edge (versi 90+), dan Safari (versi 14+). Kami sangat
                            merekomendasikan menggunakan Google Chrome untuk pengalaman terbaik. Pastikan browser Anda
                            selalu update ke versi terbaru.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="technical">
                    <div class="faq-question">
                        <span>Apakah platform ini bisa diakses melalui smartphone?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Ya, platform kami fully responsive dan dapat diakses melalui smartphone atau tablet. Namun,
                            untuk pengalaman optimal saat mengerjakan asesmen, kami merekomendasikan menggunakan laptop
                            atau desktop dengan layar minimal 13 inch untuk kenyamanan membaca soal dan navigasi.
                        </div>
                    </div>
                </div>

                <!-- Result FAQs -->
                <div class="faq-item" data-category="result">
                    <div class="faq-question">
                        <span>Kapan saya bisa melihat hasil asesmen?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Hasil asesmen kependidikan dan psikologi akan tersedia dalam 1-2 hari kerja setelah
                            pengerjaan. Hasil analisis konten digital membutuhkan waktu 3-5 hari kerja karena melibatkan
                            analisis mendalam oleh tim ahli kami. Anda akan menerima notifikasi email ketika hasil sudah
                            tersedia.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="result">
                    <div class="faq-question">
                        <span>Bagaimana cara membaca dan memahami hasil asesmen?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Setiap hasil asesmen dilengkapi dengan interpretasi detail, grafik visual, dan rekomendasi
                            pengembangan. Anda juga dapat mengunduh laporan lengkap dalam format PDF. Jika membutuhkan
                            penjelasan lebih lanjut, Anda dapat menjadwalkan sesi konsultasi dengan konselor kami
                            melalui menu "Konsultasi Hasil".
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="result">
                    <div class="faq-question">
                        <span>Apakah hasil asesmen dapat digunakan untuk melamar posisi kepala sekolah?</span>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Ya, sertifikat dan laporan hasil asesmen LEADMAP-Career telah diakui oleh berbagai institusi
                            pendidikan dan dapat digunakan sebagai dokumen pendukung dalam proses seleksi kepala
                            sekolah. Hasil asesmen Anda valid selama 2 tahun sejak tanggal pengerjaan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section" id="support">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="support-grid">
                <!-- Email Support -->
                <div class="support-card">
                    <div class="support-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Support</h3>
                    <p>Kirimkan pertanyaan atau kendala Anda melalui email. Tim kami akan merespons dalam 1x24 jam.</p>
                    <div class="support-info">
                        <div class="support-info-item">
                            <i class="fas fa-envelope"></i>
                            <span>support@leadmap-career.id</span>
                        </div>
                        <div class="support-info-item">
                            <i class="fas fa-clock"></i>
                            <span>Response: 1x24 jam</span>
                        </div>
                    </div>
                    <a href="mailto:support@leadmap-career.id" class="contact-btn">
                        <i class="fas fa-paper-plane"></i> Kirim Email
                    </a>
                </div>

                <!-- WhatsApp Support -->
                <div class="support-card">
                    <div class="support-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp Support</h3>
                    <p>Dapatkan bantuan cepat melalui WhatsApp untuk kendala teknis atau pertanyaan mendesak.</p>
                    <div class="support-info">
                        <div class="support-info-item">
                            <i class="fab fa-whatsapp"></i>
                            <span>+62 812-3456-7890</span>
                        </div>
                        <div class="support-info-item">
                            <i class="fas fa-clock"></i>
                            <span>Senin-Jumat: 08.00-17.00 WIB</span>
                        </div>
                    </div>
                    <a href="https://wa.me/6281234567890" target="_blank" class="contact-btn">
                        <i class="fab fa-whatsapp"></i> Chat WhatsApp
                    </a>
                </div>

                <!-- Phone Support -->
                <div class="support-card">
                    <div class="support-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telepon</h3>
                    <p>Hubungi hotline kami untuk bantuan langsung dari customer service kami.</p>
                    <div class="support-info">
                        <div class="support-info-item">
                            <i class="fas fa-phone"></i>
                            <span>(021) 1234-5678</span>
                        </div>
                        <div class="support-info-item">
                            <i class="fas fa-clock"></i>
                            <span>Senin-Jumat: 08.00-17.00 WIB</span>
                        </div>
                    </div>
                    <a href="tel:+622112345678" class="contact-btn">
                        <i class="fas fa-phone"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2025 LEADMAP-Career. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Toggle
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const item = this.closest('.faq-item');
                const wasActive = item.classList.contains('active');

                // Close all items
                document.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('active');
                    i.querySelector('.faq-question').classList.remove('active');
                });

                // Open clicked item if it wasn't active
                if (!wasActive) {
                    item.classList.add('active');
                    this.classList.add('active');
                }
            });
        });

        // FAQ Category Filter
        document.querySelectorAll('.faq-category').forEach(category => {
            category.addEventListener('click', function() {
                // Update active category
                document.querySelectorAll('.faq-category').forEach(c => c.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-category');

                // Filter FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Search FAQ
        function searchFAQ() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            let found = false;

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer-content').textContent.toLowerCase();

                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    found = true;

                    // Highlight matching items
                    if (searchTerm.length > 0) {
                        item.style.border = '2px solid #2b7fff';
                    }
                } else {
                    item.style.display = 'none';
                }
            });

            // Scroll to FAQ section
            if (found) {
                document.getElementById('faq').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        // Search on Enter key
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchFAQ();
            }
        });

        // Clear highlight when search is cleared
        document.getElementById('searchInput').addEventListener('input', function() {
            if (this.value === '') {
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.style.border = 'none';
                    item.style.display = 'block';
                });
            }
        });

        // Smooth scroll function
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
