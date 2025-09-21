<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEADMAP-Career - Platform Penilaian Kepemimpinan Calon Kepala Sekolah</title>
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
            background-color: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(43, 127, 255, 0.1);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #2b7fff;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: #2b7fff;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.05) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%232b7fff" stroke-width="0.5" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(43, 127, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(43, 127, 255, 0.4);
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: #ffffff;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 3rem;
        }

        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(43, 127, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(43, 127, 255, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2b7fff, #1e6aff);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.02) 0%, rgba(255, 255, 255, 1) 100%);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 3rem;
        }

        .service-card {
            background: white;
            padding: 30px 25px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(43, 127, 255, 0.08);
            cursor: pointer;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(43, 127, 255, 0.1);
            border-color: rgba(43, 127, 255, 0.2);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.1), rgba(43, 127, 255, 0.05));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.5rem;
            color: #2b7fff;
        }

        .service-card h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .service-card p {
            color: #666;
            font-size: 0.95rem;
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #2b7fff;
        }

        .footer-section p,
        .footer-section a {
            color: #ccc;
            text-decoration: none;
            margin-bottom: 10px;
            display: block;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #2b7fff;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 30px;
            text-align: center;
            color: #999;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-elements::before {
            content: '';
            position: absolute;
            top: 10%;
            right: 10%;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.1), transparent);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-elements::after {
            content: '';
            position: absolute;
            bottom: 20%;
            left: 15%;
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, transparent, rgba(43, 127, 255, 0.05));
            border-radius: 50%;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo-section">
                    <img src="{{ asset('images/bima.png') }}" alt="Icon 1" style="width: 120px; height: 60px;">
                    <img src="{{ asset('images/diktisaintek.png') }}" alt="Icon 2" style="width: 60px; height: 60px;">
                    <img src="{{ asset('images/umlogo.png') }}" alt="Icon 3" style="width: 60px; height: 60px;">
                </div>
                <ul class="nav-links">
                    <li><a href="#aktivitas">Aktivitas</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#about">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-elements"></div>
        <div class="container">
            <div class="hero-content">
                <h1>LEADMAP-Career</h1>
                <p>Platform komprehensif untuk penilaian kepemimpinan calon kepala sekolah dengan sistem asesmen terintegrasi yang mengevaluasi Kompetensi Kependidikan, Psikologi, dan Komitmen Pendidikan terintegrasi AI.</p>
                <div class="cta-buttons">
                    <a href="https://platform.leadmap-career.com" class="btn-primary">
                        <i class="fas fa-rocket"></i>
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Fitur Penilaian Utama</h2>
            <p class="section-subtitle">Tiga tahapan asesmen komprehensif untuk mengevaluasi kelayakan calon kepala sekolah</p>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Asesmen Kependidikan</h3>
                    <p>Evaluasi kompetensi profesional dan pedagogik melalui 30 soal multiple choice dalam waktu 15 menit untuk mengukur pemahaman tentang manajemen pendidikan dan pembelajaran.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Asesmen Psikologi</h3>
                    <p>Penilaian kepribadian dan karakteristik psikologis melalui 30 soal multiple choice dalam 15 menit untuk mengevaluasi kesiapan mental kepemimpinan.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Analisis Konten Digital</h3>
                    <p>Evaluasi komitmen terhadap pengembangan pendidikan melalui analisis konten media sosial untuk mengukur konsistensi visi pendidikan calon kepala sekolah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2 class="section-title">Layanan Platform</h2>
            <p class="section-subtitle">Akses berbagai fitur dan layanan untuk mendukung proses penilaian kepemimpinan</p>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h4>Deskripsi Fitur</h4>
                    <p>Panduan lengkap tahapan asesmen</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4>Buku Panduan</h4>
                    <p>Petunjuk teknis penggunaan platform</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h4>Berita Terbaru</h4>
                    <p>Update informasi dan pengumuman</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h4>Pusat Bantuan</h4>
                    <p>Dukungan teknis dan FAQ</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h4>Dokumentasi Kegiatan</h4>
                    <p>Galeri aktivitas dan acara platform</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h4>Penawaran</h4>
                    <p>Promo dan paket berlangganan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>LEADMAP-Career</h3>
                    <p>Platform inovatif untuk pengembangan kepemimpinan pendidikan melalui asesmen komprehensif berbasis AI.</p>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <p>Email: support@leadmap-career.com</p>
                    <p>Telepon: +62 812-3456-7890</p>
                </div>
                <div class="footer-section">
                    <h3>Ikuti Kami</h3>
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 LEADMAP-Career. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
