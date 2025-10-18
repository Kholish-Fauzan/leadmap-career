<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi Kegiatan - LEADMAP-Career</title>
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
            max-width: 1400px;
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

        /* Filter */
        .filter-section {
            padding: 40px 0 20px;
        }

        .filter-tabs {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 12px 30px;
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
            color: #666;
        }

        .filter-tab:hover,
        .filter-tab.active {
            background: #2b7fff;
            color: white;
            border-color: #2b7fff;
            transform: translateY(-2px);
        }

        /* Gallery Grid */
        .gallery-section {
            padding: 40px 0 60px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .gallery-item {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .gallery-image {
            position: relative;
            width: 100%;
            height: 280px;
            overflow: hidden;
        }

        .gallery-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-image img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 100%);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .overlay-badge {
            background: #2b7fff;
            color: white;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .gallery-info {
            padding: 25px;
        }

        .gallery-info h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #333;
        }

        .gallery-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 12px;
            font-size: 0.9rem;
            color: #999;
        }

        .gallery-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .gallery-description {
            color: #666;
            line-height: 1.7;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .gallery-stats {
            display: flex;
            justify-content: space-between;
            padding-top: 15px;
            margin-top: 15px;
            border-top: 1px solid #eee;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #999;
            font-size: 0.9rem;
        }

        /* Lightbox Modal */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            animation: fadeIn 0.3s;
        }

        .lightbox-content {
            position: relative;
            margin: auto;
            width: 90%;
            max-width: 1200px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 20px;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
            border-radius: 10px;
            margin: 0 auto;
        }

        .lightbox-info {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-top: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s;
            z-index: 10000;
        }

        .lightbox-close:hover {
            color: #2b7fff;
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s;
            font-size: 24px;
        }

        .lightbox-nav:hover {
            background: rgba(43, 127, 255, 0.8);
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
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

            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }

            .filter-tabs {
                gap: 10px;
            }

            .filter-tab {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .lightbox-nav {
                padding: 15px;
                font-size: 20px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
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

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h1>Dokumentasi Kegiatan</h1>
            <p>Galeri foto dan video kegiatan LEADMAP-Career</p>
        </div>
    </section>

    <!-- Filter -->
    <section class="filter-section">
        <div class="container">
            <div class="filter-tabs">
                <div class="filter-tab active" data-filter="all">Semua</div>
                <div class="filter-tab" data-filter="workshop">Workshop</div>
                <div class="filter-tab" data-filter="seminar">Seminar</div>
                <div class="filter-tab" data-filter="training">Training</div>
                <div class="filter-tab" data-filter="assessment">Assessment</div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <!-- Gallery Item 1 -->
                <div class="gallery-item" data-category="workshop" onclick="openLightbox(0)">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?w=600" alt="Workshop">
                        <div class="gallery-overlay">
                            <div class="overlay-badge">Workshop</div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-meta">
                            <span><i class="far fa-calendar"></i> 5 Jan 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Jakarta</span>
                        </div>
                        <h3>Workshop Kepemimpinan Pendidikan Modern</h3>
                        <p class="gallery-description">Kegiatan workshop yang membahas strategi kepemimpinan pendidikan
                            di era digital dengan menghadirkan para ahli pendidikan terkemuka dari berbagai universitas.
                        </p>
                        <div class="gallery-stats">
                            <span class="stat-item"><i class="far fa-images"></i> 24 Foto</span>
                            <span class="stat-item"><i class="far fa-eye"></i> 1,245 views</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item" data-category="seminar" onclick="openLightbox(1)">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=600" alt="Seminar">
                        <div class="gallery-overlay">
                            <div class="overlay-badge">Seminar</div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-meta">
                            <span><i class="far fa-calendar"></i> 28 Des 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bandung</span>
                        </div>
                        <h3>Seminar Nasional Asesmen Kepala Sekolah</h3>
                        <p class="gallery-description">Seminar nasional yang menghadirkan 500+ peserta dari seluruh
                            Indonesia untuk membahas best practices dalam asesmen kepemimpinan pendidikan.</p>
                        <div class="gallery-stats">
                            <span class="stat-item"><i class="far fa-images"></i> 36 Foto</span>
                            <span class="stat-item"><i class="far fa-eye"></i> 2,567 views</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item" data-category="training" onclick="openLightbox(2)">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600" alt="Training">
                        <div class="gallery-overlay">
                            <div class="overlay-badge">Training</div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-meta">
                            <span><i class="far fa-calendar"></i> 20 Des 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Surabaya</span>
                        </div>
                        <h3>Training Asesor Platform LEADMAP-Career</h3>
                        <p class="gallery-description">Pelatihan intensif untuk para asesor dalam menggunakan platform
                            LEADMAP-Career dan melakukan penilaian yang objektif dan komprehensif.</p>
                        <div class="gallery-stats">
                            <span class="stat-item"><i class="far fa-images"></i> 18 Foto</span>
                            <span class="stat-item"><i class="far fa-eye"></i> 876 views</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item" data-category="assessment" onclick="openLightbox(3)">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600" alt="Assessment">
                        <div class="gallery-overlay">
                            <div class="overlay-badge">Assessment</div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-meta">
                            <span><i class="far fa-calendar"></i> 15 Des 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Yogyakarta</span>
                        </div>
                        <h3>Pelaksanaan Asesmen Gelombang 1 Tahun 2024</h3>
                        <p class="gallery-description">Dokumentasi pelaksanaan asesmen kepemimpinan gelombang pertama
                            tahun 2024 yang diikuti oleh 200+ calon kepala sekolah dari berbagai daerah.</p>
                        <div class="gallery-stats">
                            <span class="stat-item"><i class="far fa-images"></i> 42 Foto</span>
                            <span class="stat-item"><i class="far fa-eye"></i> 3,421 views</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item" data-category="workshop" onclick="openLightbox(4)">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1559223607-e2ee65e4bc13?w=600" alt="Workshop">
                        <div class="gallery-overlay">
                            <div class="overlay-badge">Workshop</div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-meta">
                            <span><i class="far fa-calendar"></i> 10 Des 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Semarang</span>
                        </div>
                        <h3>Workshop Analisis Konten Digital untuk Pendidik</h3>
                        <p class="gallery-description">Workshop khusus membahas pentingnya kehadiran digital pendidik
                            dan cara memanfaatkan media sosial untuk pengembangan profesional.</p>
                        <div class="gallery-stats">
                            <span class="stat-item"><i class="far fa-images"></i> 28 Foto</span>
                            <span class="stat-item"><i class="far fa-eye"></i> 1,534 views</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item" data-category="training" onclick="openLightbox(5)">
                    <div class="gallery-image">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600" alt="Training">
                        <div class="gallery-overlay">
                            <div class="overlay-badge">Training</div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-meta">
                            <span><i class="far fa-calendar"></i> 5 Des 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Malang</span>
                        </div>
                        <h3>Pelatihan Psikologi Kepemimpinan Sekolah</h3>
                        <p class="gallery-description">Pelatihan mendalam tentang aspek psikologis dalam kepemimpinan
                            sekolah dan cara mengembangkan emotional intelligence sebagai pemimpin.</p>
                        <div class="gallery-stats">
                            <span class="stat-item"><i class="far fa-images"></i> 31 Foto</span>
                            <span class="stat-item"><i class="far fa-eye"></i> 1,892 views</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <div class="lightbox-nav lightbox-prev" onclick="changeImage(-1)">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="lightbox-nav lightbox-next" onclick="changeImage(1)">
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="lightbox-content">
            <img id="lightbox-img" class="lightbox-image" src="" alt="">
            <div class="lightbox-info">
                <h3 id="lightbox-title"></h3>
                <p id="lightbox-desc"></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2025 LEADMAP-Career. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Gallery data
        const galleryData = [{
                img: 'https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?w=1200',
                title: 'Workshop Kepemimpinan Pendidikan Modern',
                desc: 'Kegiatan workshop yang membahas strategi kepemimpinan pendidikan di era digital dengan menghadirkan para ahli pendidikan terkemuka dari berbagai universitas. Workshop ini dihadiri oleh 150+ peserta dan berlangsung selama 2 hari penuh dengan berbagai sesi interaktif.'
            },
            {
                img: 'https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=1200',
                title: 'Seminar Nasional Asesmen Kepala Sekolah',
                desc: 'Seminar nasional yang menghadirkan 500+ peserta dari seluruh Indonesia untuk membahas best practices dalam asesmen kepemimpinan pendidikan. Acara ini menampilkan keynote speaker dari Kemendikbud dan para praktisi pendidikan berpengalaman.'
            },
            {
                img: 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200',
                title: 'Training Asesor Platform LEADMAP-Career',
                desc: 'Pelatihan intensif untuk para asesor dalam menggunakan platform LEADMAP-Career dan melakukan penilaian yang objektif dan komprehensif. Training mencakup hands-on session dengan studi kasus nyata.'
            },
            {
                img: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=1200',
                title: 'Pelaksanaan Asesmen Gelombang 1 Tahun 2024',
                desc: 'Dokumentasi pelaksanaan asesmen kepemimpinan gelombang pertama tahun 2024 yang diikuti oleh 200+ calon kepala sekolah dari berbagai daerah. Asesmen berlangsung dengan protokol ketat dan didampingi oleh asesor profesional.'
            },
            {
                img: 'https://images.unsplash.com/photo-1559223607-e2ee65e4bc13?w=1200',
                title: 'Workshop Analisis Konten Digital untuk Pendidik',
                desc: 'Workshop khusus membahas pentingnya kehadiran digital pendidik dan cara memanfaatkan media sosial untuk pengembangan profesional. Peserta belajar strategi content creation dan digital branding untuk pendidik.'
            },
            {
                img: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1200',
                title: 'Pelatihan Psikologi Kepemimpinan Sekolah',
                desc: 'Pelatihan mendalam tentang aspek psikologis dalam kepemimpinan sekolah dan cara mengembangkan emotional intelligence sebagai pemimpin. Materi mencakup conflict management, team building, dan decision making.'
            }
        ];

        let currentImageIndex = 0;

        // Filter functionality
        const filterTabs = document.querySelectorAll('.filter-tab');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Update active tab
                filterTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                // Filter items
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Lightbox functionality
        function openLightbox(index) {
            currentImageIndex = index;
            const data = galleryData[index];

            document.getElementById('lightbox-img').src = data.img;
            document.getElementById('lightbox-title').textContent = data.title;
            document.getElementById('lightbox-desc').textContent = data.desc;
            document.getElementById('lightbox').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function changeImage(direction) {
            currentImageIndex += direction;

            if (currentImageIndex < 0) {
                currentImageIndex = galleryData.length - 1;
            } else if (currentImageIndex >= galleryData.length) {
                currentImageIndex = 0;
            }

            const data = galleryData[currentImageIndex];
            document.getElementById('lightbox-img').src = data.img;
            document.getElementById('lightbox-title').textContent = data.title;
            document.getElementById('lightbox-desc').textContent = data.desc;
        }

        // Close lightbox with ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeLightbox();
            } else if (event.key === 'ArrowLeft') {
                changeImage(-1);
            } else if (event.key === 'ArrowRight') {
                changeImage(1);
            }
        });

        // Close lightbox when clicking outside image
        document.getElementById('lightbox').addEventListener('click', function(event) {
            if (event.target === this) {
                closeLightbox();
            }
        });
    </script>
</body>

</html>
