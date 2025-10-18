<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terbaru - LEADMAP-Career</title>
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

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(43, 127, 255, 0.1), rgba(255, 255, 255, 1));
            padding: 60px 0 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            color: #2b7fff;
            margin-bottom: 10px;
        }

        .hero p {
            color: #666;
            font-size: 1.1rem;
        }

        /* Featured Post */
        .featured-section {
            padding: 40px 0;
        }

        .featured-post {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            margin-bottom: 50px;
        }

        .featured-image {
            position: relative;
            overflow: hidden;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .featured-post:hover .featured-image img {
            transform: scale(1.05);
        }

        .featured-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #ff6b6b;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .featured-content {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .post-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #666;
        }

        .post-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .featured-content h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #333;
        }

        .featured-content p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #2b7fff;
            text-decoration: none;
            font-weight: 600;
            transition: gap 0.3s;
        }

        .read-more:hover {
            gap: 15px;
        }

        /* Posts Grid */
        .posts-section {
            padding: 40px 0;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .post-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            cursor: pointer;
        }

        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .post-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .post-card:hover .post-image img {
            transform: scale(1.1);
        }

        .post-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #2b7fff;
            color: white;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .post-content {
            padding: 25px;
        }

        .post-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #333;
        }

        .post-excerpt {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Sidebar */
        .content-wrapper {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
            margin-bottom: 60px;
        }

        .sidebar {
            position: sticky;
            top: 100px;
            align-self: start;
        }

        .sidebar-widget {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        }

        .widget-title {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #333;
            padding-bottom: 15px;
            border-bottom: 3px solid #2b7fff;
        }

        .category-list {
            list-style: none;
        }

        .category-list li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category-list li:last-child {
            border-bottom: none;
        }

        .category-list a {
            color: #666;
            text-decoration: none;
            transition: color 0.3s;
        }

        .category-list a:hover {
            color: #2b7fff;
        }

        .category-count {
            background: #f0f0f0;
            color: #666;
            padding: 3px 10px;
            border-radius: 10px;
            font-size: 0.85rem;
        }

        .popular-post {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .popular-post:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .popular-thumb {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .popular-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .popular-info h4 {
            font-size: 1rem;
            margin-bottom: 8px;
            color: #333;
        }

        .popular-info p {
            font-size: 0.85rem;
            color: #999;
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
        @media (max-width: 968px) {
            .featured-post {
                grid-template-columns: 1fr;
            }

            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: relative;
                top: 0;
            }

            .posts-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .featured-content h2 {
                font-size: 1.5rem;
            }

            .featured-content {
                padding: 25px;
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Berita Terbaru</h1>
            <p>Informasi dan update terkini seputar LEADMAP-Career</p>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="featured-section">
        <div class="container">
            <div class="featured-post">
                <div class="featured-image">
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800" alt="Featured">
                    <div class="featured-badge">FEATURED</div>
                </div>
                <div class="featured-content">
                    <div class="post-meta">
                        <span><i class="far fa-calendar"></i> 5 Januari 2025</span>
                        <span><i class="far fa-user"></i> Admin LEADMAP</span>
                        <span><i class="far fa-eye"></i> 1,234 views</span>
                    </div>
                    <h2>Peluncuran Fitur Analisis Konten Digital Terbaru</h2>
                    <p>Platform LEADMAP-Career kini dilengkapi dengan fitur analisis konten digital yang lebih canggih
                        untuk mengevaluasi komitmen calon kepala sekolah terhadap pengembangan pendidikan melalui
                        aktivitas media sosial mereka. Fitur ini menggunakan teknologi AI untuk memberikan penilaian
                        yang lebih objektif dan komprehensif.</p>
                    <a href="#" class="read-more">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts Section -->
    <section class="posts-section">
        <div class="container">
            <div class="content-wrapper">
                <div class="main-content">
                    <h2 class="section-title">Semua Berita</h2>
                    <div class="posts-grid">
                        <!-- Post 1 -->
                        <div class="post-card">
                            <div class="post-image">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600"
                                    alt="News">
                                <div class="post-category">Pengumuman</div>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar"></i> 3 Januari 2025</span>
                                </div>
                                <h3>Workshop Persiapan Asesmen Kepemimpinan 2025</h3>
                                <p class="post-excerpt">Akan diselenggarakan workshop khusus untuk membantu calon
                                    peserta mempersiapkan diri menghadapi asesmen kepemimpinan. Pendaftaran dibuka
                                    hingga akhir Januari.</p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="post-card">
                            <div class="post-image">
                                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600"
                                    alt="News">
                                <div class="post-category">Update</div>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar"></i> 28 Desember 2024</span>
                                </div>
                                <h3>Peningkatan Keamanan Sistem Platform</h3>
                                <p class="post-excerpt">Kami telah melakukan upgrade keamanan sistem untuk melindungi
                                    data pribadi dan hasil asesmen Anda dengan standar enkripsi terbaru.</p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="post-card">
                            <div class="post-image">
                                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600"
                                    alt="News">
                                <div class="post-category">Tips</div>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar"></i> 25 Desember 2024</span>
                                </div>
                                <h3>5 Tips Sukses Menghadapi Asesmen Psikologi</h3>
                                <p class="post-excerpt">Pelajari strategi efektif untuk menghadapi asesmen psikologi
                                    dengan percaya diri dan mendapatkan hasil yang optimal sesuai dengan kepribadian
                                    Anda.</p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 4 -->
                        <div class="post-card">
                            <div class="post-image">
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600"
                                    alt="News">
                                <div class="post-category">Studi Kasus</div>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar"></i> 20 Desember 2024</span>
                                </div>
                                <h3>Kisah Sukses: Dari Guru Biasa ke Kepala Sekolah Inspiratif</h3>
                                <p class="post-excerpt">Simak perjalanan Pak Ahmad yang berhasil menjadi kepala sekolah
                                    teladan setelah mengikuti program asesmen LEADMAP-Career.</p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 5 -->
                        <div class="post-card">
                            <div class="post-image">
                                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600"
                                    alt="News">
                                <div class="post-category">Penelitian</div>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar"></i> 15 Desember 2024</span>
                                </div>
                                <h3>Riset Terbaru: Korelasi Media Sosial dan Komitmen Pendidikan</h3>
                                <p class="post-excerpt">Temuan penelitian menunjukkan hubungan signifikan antara
                                    aktivitas media sosial pendidik dengan tingkat dedikasi mereka terhadap pengembangan
                                    pendidikan.</p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 6 -->
                        <div class="post-card">
                            <div class="post-image">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600"
                                    alt="News">
                                <div class="post-category">Event</div>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar"></i> 10 Desember 2024</span>
                                </div>
                                <h3>Webinar: Membangun Karakter Kepemimpinan Pendidikan</h3>
                                <p class="post-excerpt">Ikuti webinar gratis bersama para ahli pendidikan untuk
                                    memahami karakteristik kepemimpinan yang efektif di era digital.</p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="sidebar">
                    <!-- Categories Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Kategori</h3>
                        <ul class="category-list">
                            <li>
                                <a href="#">Pengumuman</a>
                                <span class="category-count">12</span>
                            </li>
                            <li>
                                <a href="#">Update Platform</a>
                                <span class="category-count">8</span>
                            </li>
                            <li>
                                <a href="#">Tips & Trik</a>
                                <span class="category-count">15</span>
                            </li>
                            <li>
                                <a href="#">Studi Kasus</a>
                                <span class="category-count">6</span>
                            </li>
                            <li>
                                <a href="#">Event</a>
                                <span class="category-count">10</span>
                            </li>
                            <li>
                                <a href="#">Penelitian</a>
                                <span class="category-count">5</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Popular Posts Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Berita Populer</h3>
                        <div class="popular-post">
                            <div class="popular-thumb">
                                <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?w=200"
                                    alt="Popular">
                            </div>
                            <div class="popular-info">
                                <h4>Panduan Lengkap Asesmen Kependidikan</h4>
                                <p><i class="far fa-calendar"></i> 1 Jan 2025</p>
                            </div>
                        </div>
                        <div class="popular-post">
                            <div class="popular-thumb">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=200"
                                    alt="Popular">
                            </div>
                            <div class="popular-info">
                                <h4>Mempersiapkan Diri untuk Asesmen</h4>
                                <p><i class="far fa-calendar"></i> 28 Des 2024</p>
                            </div>
                        </div>
                        <div class="popular-post">
                            <div class="popular-thumb">
                                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=200"
                                    alt="Popular">
                            </div>
                            <div class="popular-info">
                                <h4>Strategi Komunikasi Digital Pendidik</h4>
                                <p><i class="far fa-calendar"></i> 25 Des 2024</p>
                            </div>
                        </div>
                    </div>
                </aside>
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
</body>

</html>
