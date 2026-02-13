<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Layanan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
        }

        /* Navigation Styles */
        .navbar {
            max-width: 1200px;
            margin: 0 auto 30px;
            background: white;
            padding: 15px 30px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: slideDown 0.5s ease-out;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }

        .nav-left, .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.1em;
        }

        .home-link {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(102,126,234,0.3);
        }

        .home-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102,126,234,0.4);
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        .service-link {
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
        }

        .service-link:hover {
            background: #764ba2;
            color: white;
            border-color: #764ba2;
            transform: translateY(-2px);
        }

        /* Active link state */
        .nav-link.active {
            background: #764ba2;
            color: white;
            border-color: #764ba2;
            position: relative;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background: white;
            border-radius: 50%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: fadeIn 0.8s ease-out;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5em;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }

        h2 {
            color: #444;
            margin-bottom: 25px;
            font-size: 1.8em;
            position: relative;
            padding-bottom: 10px;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }

        p {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
            text-align: center;
        }

        /* Alert Messages */
        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            animation: slideIn 0.5s ease-out;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Services Grid Layout */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Service Card Styles */
        .service-card {
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(102,126,234,0.2);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .service-icon {
            font-size: 3.5em;
            margin-bottom: 20px;
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: pulse 2s infinite;
        }

        .service-card h3 {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #333;
        }

        .service-card p {
            text-align: left;
            margin-bottom: 20px;
            color: #666;
            font-size: 0.95em;
        }

        .service-features {
            list-style: none;
            margin-top: 15px;
        }

        .service-features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
        }

        .service-features li::before {
            content: '✓';
            color: #764ba2;
            font-weight: bold;
            font-size: 1.1em;
        }

        .service-price {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px dashed #e0e0e0;
            font-size: 1.3em;
            font-weight: bold;
            color: #764ba2;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-service {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-size: 0.9em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-service:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102,126,234,0.3);
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
            padding: 30px;
            background: linear-gradient(145deg, #667eea, #764ba2);
            border-radius: 15px;
            color: white;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.2);
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 1.1em;
            opacity: 0.9;
        }

        /* Process Section */
        .process-section {
            margin-bottom: 40px;
            padding: 30px;
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .process-step {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2em;
            font-weight: bold;
            margin: 0 auto 15px;
        }

        .process-step h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .process-step p {
            margin-bottom: 0;
            font-size: 0.9em;
        }

        /* FAQ Section */
        .faq-section {
            margin-bottom: 40px;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .faq-item {
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            transform: translateX(10px);
            background: linear-gradient(145deg, #667eea10, #764ba210);
        }

        .faq-item h4 {
            margin-bottom: 10px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .faq-item p {
            text-align: left;
            margin-bottom: 0;
            color: #666;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            padding: 50px;
            background: linear-gradient(145deg, #667eea, #764ba2);
            border-radius: 15px;
            color: white;
            margin-bottom: 40px;
        }

        .cta-section h2 {
            color: white;
        }

        .cta-section h2::after {
            background: white;
            left: 50%;
            transform: translateX(-50%);
        }

        .cta-section p {
            color: white;
            opacity: 0.9;
            font-size: 1.2em;
        }

        .btn-cta {
            background: white;
            color: #764ba2;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .btn-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            background: #f8f9fa;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .stats-section {
                grid-template-columns: repeat(2, 1fr);
            }

            .process-steps {
                grid-template-columns: repeat(2, 1fr);
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 12px 20px;
                border-radius: 30px;
            }

            .nav-link {
                padding: 8px 16px;
                font-size: 1em;
            }

            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card:hover {
                transform: translateY(-5px);
            }

            .stat-item:hover {
                transform: none;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .navbar {
                flex-direction: column;
                gap: 10px;
                border-radius: 20px;
            }

            .nav-left, .nav-right {
                width: 100%;
            }

            .nav-link {
                flex: 1;
                text-align: center;
                justify-content: center;
            }

            h1 {
                font-size: 1.8em;
            }

            h2 {
                font-size: 1.5em;
            }

            .container {
                padding: 15px;
            }

            .stats-section {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 20px;
            }

            .process-steps {
                grid-template-columns: 1fr;
            }

            .cta-section {
                padding: 30px;
            }

            .btn-cta {
                padding: 12px 30px;
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar dengan Laravel route -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') ?? '/home' }}" class="nav-link home-link {{ request()->routeIs('home') ? 'active' : '' }}" title="Kembali ke Beranda">
                <span>🏠</span> Back To Home
            </a>
        </div>
    </nav>

    <div class="container">
        <h1>Layanan Kami</h1>
        
        <p>Kami menyediakan berbagai layanan berkualitas tinggi untuk memenuhi kebutuhan bisnis Anda. Dengan tim profesional dan berpengalaman, kami siap membantu mewujudkan visi Anda.</p>

        <!-- Alert Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul style="margin-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Proyek Selesai</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">200+</div>
                <div class="stat-label">Klien Puas</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Tim Profesional</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">10+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3>Web Development</h3>
                <p>Kami mengembangkan website profesional, responsif, dan SEO-friendly yang sesuai dengan kebutuhan bisnis Anda.</p>
                <ul class="service-features">
                    <li>Website Company Profile</li>
                    <li>E-commerce Solution</li>
                    <li>Web Application</li>
                    <li>CMS Development</li>
                    <li>API Integration</li>
                </ul>
                <div class="service-price">
                    <span>Mulai Rp 5.000.000</span>
                    <a href="#" class="btn-service">Pesan Sekarang →</a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile App Development</h3>
                <p>Kembangkan aplikasi mobile Android & iOS dengan teknologi terkini dan user experience yang optimal.</p>
                <ul class="service-features">
                    <li>Native Android (Kotlin)</li>
                    <li>Native iOS (Swift)</li>
                    <li>Cross Platform (Flutter)</li>
                    <li>App Maintenance</li>
                    <li>UI/UX Design</li>
                </ul>
                <div class="service-price">
                    <span>Mulai Rp 8.000.000</span>
                    <a href="#" class="btn-service">Pesan Sekarang →</a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>UI/UX Design</h3>
                <p>Desain antarmuka yang menarik dan user-friendly untuk meningkatkan engagement pengguna Anda.</p>
                <ul class="service-features">
                    <li>Wireframing</li>
                    <li>Prototyping</li>
                    <li>Visual Design</li>
                    <li>User Research</li>
                    <li>Usability Testing</li>
                </ul>
                <div class="service-price">
                    <span>Mulai Rp 3.000.000</span>
                    <a href="#" class="btn-service">Pesan Sekarang →</a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-icon">🔍</div>
                <h3>SEO Optimization</h3>
                <p>Tingkatkan visibilitas website Anda di mesin pencari dan dapatkan lebih banyak traffic organik.</p>
                <ul class="service-features">
                    <li>SEO Audit</li>
                    <li>Keyword Research</li>
                    <li>On-page SEO</li>
                    <li>Off-page SEO</li>
                    <li>Monthly Report</li>
                </ul>
                <div class="service-price">
                    <span>Mulai Rp 2.500.000</span>
                    <a href="#" class="btn-service">Pesan Sekarang →</a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Digital Marketing</h3>
                <p>Strategi pemasaran digital terintegrasi untuk meningkatkan brand awareness dan konversi.</p>
                <ul class="service-features">
                    <li>Social Media Marketing</li>
                    <li>Email Marketing</li>
                    <li>Content Marketing</li>
                    <li>PPC Advertising</li>
                    <li>Analytics & Reporting</li>
                </ul>
                <div class="service-price">
                    <span>Mulai Rp 4.000.000</span>
                    <a href="#" class="btn-service">Pesan Sekarang →</a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="service-card">
                <div class="service-icon">🛡️</div>
                <h3>IT Consulting</h3>
                <p>Konsultasi IT profesional untuk membantu Anda mengambil keputusan teknologi yang tepat.</p>
                <ul class="service-features">
                    <li>IT Strategy</li>
                    <li>System Architecture</li>
                    <li>Cloud Solutions</li>
                    <li>Security Assessment</li>
                    <li>Digital Transformation</li>
                </ul>
                <div class="service-price">
                    <span>Mulai Rp 1.500.000/jam</span>
                    <a href="#" class="btn-service">Pesan Sekarang →</a>
                </div>
            </div>
        </div>

        <!-- Process Section -->
        <div class="process-section">
            <h2 style="text-align: center;">Cara Kerja Kami</h2>
            <p style="margin-bottom: 30px;">Proses sederhana dan transparan untuk memastikan hasil terbaik bagi klien kami</p>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h4>Konsultasi</h4>
                    <p>Diskusi kebutuhan dan tujuan bisnis Anda dengan tim kami</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h4>Perencanaan</h4>
                    <p>Membuat roadmap dan timeline proyek yang detail</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h4>Eksekusi</h4>
                    <p>Implementasi dengan metodologi agile dan quality assurance</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h4>Maintenance</h4>
                    <p>Dukungan berkelanjutan dan pengembangan lanjutan</p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <h2 style="text-align: center;">Pertanyaan Umum</h2>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h4>❓ Berapa lama waktu pengerjaan?</h4>
                    <p>Waktu pengerjaan bervariasi tergantung kompleksitas proyek. Rata-rata proyek website selesai dalam 2-4 minggu.</p>
                </div>
                <div class="faq-item">
                    <h4>❓ Apakah ada garansi?</h4>
                    <p>Ya, kami memberikan garansi perbaikan bug gratis selama 3 bulan setelah proyek selesai.</p>
                </div>
                <div class="faq-item">
                    <h4>❓ Bagaimana metode pembayaran?</h4>
                    <p>Kami menerima pembayaran melalui transfer bank (BCA, Mandiri, BRI) dengan sistem termin 50:50.</p>
                </div>
                <div class="faq-item">
                    <h4>❓ Apakah termasuk hosting?</h4>
                    <p>Untuk paket tertentu, kami menyertakan hosting gratis 1 tahun. Untuk detailnya bisa diskusikan lebih lanjut.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <h2>Siap Memulai Proyek Anda?</h2>
            <p>Konsultasi gratis dengan tim kami dan dapatkan penawaran khusus untuk proyek pertama Anda</p>
            <a href="#" class="btn-cta">
                Konsultasi Sekarang
            </a>
            <p style="margin-top: 20px; font-size: 0.9em;">*Gratis konsultasi tanpa biaya</p>
        </div>

        <!-- Social Media -->
        <section class="social-media" style="text-align: center; padding: 30px; background: linear-gradient(145deg, #f8f9fa, #e9ecef); border-radius: 15px;">
            <h2>Ikuti Kami</h2>
            <div class="social-icons" style="display: flex; justify-content: center; gap: 20px; margin-top: 20px; flex-wrap: wrap;">
                <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2em; box-shadow: 0 5px 15px rgba(102,126,234,0.3);">📘</a>
                <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2em; box-shadow: 0 5px 15px rgba(102,126,234,0.3);">📷</a>
                <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2em; box-shadow: 0 5px 15px rgba(102,126,234,0.3);">🐦</a>
                <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2em; box-shadow: 0 5px 15px rgba(102,126,234,0.3);">🔗</a>
                <a href="#" class="social-icon" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2em; box-shadow: 0 5px 15px rgba(102,126,234,0.3);">▶️</a>
            </div>
            <p style="margin-top: 20px; color: #666; text-align: center;">Ikuti media sosial kami untuk informasi terbaru</p>
        </section>
    </div>

    <script>
        // Auto hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500);
                }, 5000);
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Set active nav based on current URL
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });

        // Animate stats numbers on scroll
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const text = stat.innerText;
                if (text.includes('+')) {
                    const target = parseInt(text.replace(/[^0-9]/g, ''));
                    let current = 0;
                    const increment = target / 50;
                    const timer = setInterval(() => {
                        current += increment;
                        if (current < target) {
                            stat.innerText = Math.floor(current) + '+';
                        } else {
                            stat.innerText = target + '+';
                            clearInterval(timer);
                        }
                    }, 30);
                }
            });
        }

        // Trigger animation when stats section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    observer.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
</body>
</html>