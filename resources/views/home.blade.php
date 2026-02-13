<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Cerah')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background: linear-gradient(145deg, #f6f9fc 0%, #edf2f7 100%);
            min-height: 100vh;
            padding: 30px 20px;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(255, 182, 193, 0.1) 0%, transparent 30%),
                radial-gradient(circle at 90% 50%, rgba(135, 206, 235, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 30% 80%, rgba(255, 218, 185, 0.1) 0%, transparent 35%);
            pointer-events: none;
        }

        .bright-container {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 40px;
            box-shadow: 
                0 20px 40px -12px rgba(0, 20, 40, 0.15),
                0 8px 24px -6px rgba(0, 32, 64, 0.1),
                inset 0 1px 2px rgba(255, 255, 255, 0.8);
            padding: 32px;
            position: relative;
            transition: all 0.3s ease;
        }

        .bright-container:hover {
            box-shadow: 0 30px 60px -12px rgba(0, 40, 80, 0.2);
        }

        /* Header & Navigation */
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo-icon {
            width: 52px;
            height: 52px;
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 20px -8px rgba(255, 107, 107, 0.4);
        }

        .logo-icon i {
            font-size: 26px;
            color: white;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        .logo-text {
            font-size: 1.8em;
            font-weight: 700;
            background: linear-gradient(145deg, #2d3748, #1a202c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
        }

        .date-badge {
            background: white;
            border: 1px solid #e2e8f0;
            padding: 12px 24px;
            border-radius: 50px;
            color: #4a5568;
            font-size: 0.95em;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .date-badge i {
            color: #ff6b6b;
        }

        /* Navigation */
        .nav-wrapper {
            background: white;
            border-radius: 60px;
            padding: 6px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 8px 20px -8px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 6px;
            flex-wrap: wrap;
            justify-content: center;
        }

        nav ul li a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            color: #4a5568;
            text-decoration: none;
            font-weight: 600;
            border-radius: 40px;
            transition: all 0.25s ease;
            font-size: 1.05em;
        }

        nav ul li a i {
            font-size: 1.1em;
            color: #718096;
            transition: all 0.25s ease;
        }

        nav ul li a:hover {
            background: #fff5f5;
            color: #ff6b6b;
        }

        nav ul li a:hover i {
            color: #ff6b6b;
        }

        nav ul li a.active {
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            color: white;
            box-shadow: 0 8px 16px rgba(255, 107, 107, 0.25);
        }

        nav ul li a.active i {
            color: white;
        }

        /* Stats Cards - Bright & Colorful */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 28px;
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 20px -8px rgba(0, 0, 0, 0.05);
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -10px rgba(255, 107, 107, 0.2);
            border-color: #ff6b6b;
        }

        .stat-info h3 {
            color: #718096;
            font-size: 0.95em;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .stat-number {
            color: #1a202c;
            font-size: 2.2em;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 6px;
        }

        .stat-trend {
            color: #38a169;
            font-size: 0.9em;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 4px;
            background: #f0fff4;
            padding: 4px 10px;
            border-radius: 40px;
            width: fit-content;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(145deg, #fff5f5, #ffe8e8);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ffcdcd;
        }

        .stat-icon i {
            font-size: 30px;
            color: #ff6b6b;
        }

        /* Content Area */
        .content-area {
            background: white;
            border-radius: 28px;
            padding: 32px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 8px 20px -8px rgba(0, 0, 0, 0.03);
            margin-bottom: 30px;
        }

        .section-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }

        .section-title h2 {
            color: #1a202c;
            font-size: 1.6em;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .section-title h2 i {
            color: #ff6b6b;
            background: #fff5f5;
            padding: 12px;
            border-radius: 16px;
            font-size: 0.9em;
        }

        .badge {
            background: linear-gradient(145deg, #667eea, #764ba2);
            color: white;
            padding: 8px 18px;
            border-radius: 40px;
            font-size: 0.9em;
            font-weight: 600;
            box-shadow: 0 6px 14px rgba(102, 126, 234, 0.25);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .badge i {
            font-size: 0.9em;
        }

        .content-body {
            color: #4a5568;
            line-height: 1.7;
            font-size: 1.05em;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 16px;
            margin-top: 32px;
        }

        .action-btn {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 18px;
            border-radius: 20px;
            color: #2d3748;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            transition: all 0.25s ease;
            font-weight: 600;
        }

        .action-btn:hover {
            background: white;
            border-color: #ff6b6b;
            color: #ff6b6b;
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -12px rgba(255, 107, 107, 0.4);
        }

        .action-btn i {
            font-size: 28px;
            color: #ff6b6b;
            transition: all 0.25s ease;
        }

        .action-btn:hover i {
            transform: scale(1.1);
        }

        /* Activity Feed */
        .activity-feed {
            margin-top: 32px;
            background: #f8fafc;
            border-radius: 24px;
            padding: 24px;
        }

        .feed-title {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1a202c;
            font-size: 1.2em;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .feed-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .feed-item:last-child {
            border-bottom: none;
        }

        .feed-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e2e8f0;
        }

        .feed-icon i {
            color: #ff6b6b;
            font-size: 18px;
        }

        .feed-content {
            flex: 1;
        }

        .feed-text {
            color: #2d3748;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .feed-time {
            color: #a0aec0;
            font-size: 0.85em;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Footer */
        .dashboard-footer {
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #718096;
            font-size: 0.95em;
            flex-wrap: wrap;
            gap: 20px;
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-links a {
            color: #a0aec0;
            transition: all 0.25s ease;
            font-size: 1.2em;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f7fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .social-links a:hover {
            background: #ff6b6b;
            color: white;
            border-color: #ff6b6b;
            transform: translateY(-3px);
        }

        /* Welcome Banner */
        .welcome-banner {
            background: linear-gradient(145deg, #667eea, #764ba2);
            border-radius: 24px;
            padding: 32px;
            color: white;
            margin-bottom: 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 20px 30px -10px rgba(102, 126, 234, 0.3);
        }

        .welcome-text h3 {
            font-size: 1.8em;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .welcome-text p {
            opacity: 0.95;
            font-size: 1.1em;
        }

        .welcome-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 14px 28px;
            border-radius: 40px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.25s ease;
        }

        .welcome-btn:hover {
            background: white;
            color: #667eea;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .bright-container {
                padding: 24px;
            }
            
            .logo-text {
                font-size: 1.5em;
            }
        }

        @media (max-width: 768px) {
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-wrapper {
                border-radius: 20px;
            }

            nav ul li a {
                padding: 12px 20px;
                font-size: 0.95em;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .content-area {
                padding: 24px;
            }

            .welcome-banner {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .bright-container {
                padding: 20px;
            }

            .logo-icon {
                width: 44px;
                height: 44px;
            }

            .logo-text {
                font-size: 1.3em;
            }

            .date-badge {
                width: 100%;
                justify-content: center;
            }
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        .stat-card {
            animation: float 5s ease-in-out infinite;
            animation-delay: calc(var(--i) * 0.2s);
        }

        /* Custom Scrollbar - Bright Theme */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #ffb5b5;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #ff8e8e;
        }
    </style>
</head>
<body>
    <div class="bright-container">
        <!-- Header with dynamic date -->
        <div class="dashboard-header">
            <div class="logo-area">
                <div class="logo-icon">
                    <i class="fas fa-sun"></i>
                </div>
                <span class="logo-text">@yield('app-name', 'Cerah Dashboard')</span>
            </div>
            <div class="date-badge">
                <i class="far fa-calendar-alt"></i>
                <span id="currentDate"></span>
                <i class="far fa-clock ms-2"></i>
                <span id="currentTime"></span>
            </div>
        </div>

        <!-- Navigation with icons -->
        <div class="nav-wrapper">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}"><i class="fas fa-info-circle"></i> Tentang</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}"><i class="fas fa-envelope"></i> Kontak</a></li>
                    <li><a href="{{ url('/service') }}" class="{{ Request::is('service') ? 'active' : '' }}"><i class="fas fa-cog"></i> Layanan</a></li>
                    <li><a href="{{ url('/portfolio') }}" class="{{ Request::is('portfolio') ? 'active' : '' }}"><i class="fas fa-briefcase"></i> Portofolio</a></li>
                    <li><a href="{{ url('/team') }}" class="{{ Request::is('team') ? 'active' : '' }}"><i class="fas fa-users"></i> Tim</a></li>
                </ul>
            </nav>
        </div>

        <!-- Welcome Banner -->
        <div class="welcome-banner">
            <div class="welcome-text">
                <h3>👋 Selamat Datang Kembali!</h3>
                <p>Senang melihat Anda lagi. Semoga harimu menyenangkan!</p>
            </div>
            <a href="#" class="welcome-btn">
                <i class="fas fa-rocket"></i> Mulai
            </a>
        </div>

        <!-- Stats Cards - Colorful -->
        <div class="stats-grid">
            <div class="stat-card" style="--i: 0">
                <div class="stat-info">
                    <h3>Pengunjung</h3>
                    <div class="stat-number">2,845</div>
                    <span class="stat-trend"><i class="fas fa-arrow-up"></i> +12.5%</span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="stat-card" style="--i: 1">
                <div class="stat-info">
                    <h3>Proyek</h3>
                    <div class="stat-number">143</div>
                    <span class="stat-trend"><i class="fas fa-arrow-up"></i> +5.2%</span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-folder-open"></i>
                </div>
            </div>
            <div class="stat-card" style="--i: 2">
                <div class="stat-info">
                    <h3>Penghargaan</h3>
                    <div class="stat-number">27</div>
                    <span class="stat-trend"><i class="fas fa-arrow-up"></i> +3.1%</span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-trophy"></i>
                </div>
            </div>
            <div class="stat-card" style="--i: 3">
                <div class="stat-info">
                    <h3>Klien</h3>
                    <div class="stat-number">189</div>
                    <span class="stat-trend"><i class="fas fa-arrow-up"></i> +8.3%</span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-handshake"></i>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="content-area">
            <div class="section-title">
                <h2>
                    <i class="fas fa-@yield('content-icon', 'smile')"></i>
                    @yield('content-title', 'Halaman Utama')
                </h2>
                <span class="badge">
                    <i class="fas fa-shield-alt"></i> Premium
                </span>
            </div>
            
            <div class="content-body">
                @yield('content')
                <p style="margin-bottom: 16px;">Ini adalah area konten utama dengan desain cerah dan segar. Semua elemen dirancang untuk memberikan pengalaman visual yang menyenangkan.</p>
                <p>Gunakan halaman ini untuk menampilkan berbagai informasi penting dengan tampilan yang modern dan menarik.</p>
            </div>

            <!-- Activity Feed -->
            <div class="activity-feed">
                <div class="feed-title">
                    <i class="fas fa-bolt" style="color: #ff6b6b;"></i>
                    Aktivitas Terkini
                </div>
                <div class="feed-item">
                    <div class="feed-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="feed-content">
                        <div class="feed-text">Proyek "Dashboard Cerah" selesai</div>
                        <div class="feed-time"><i class="far fa-clock"></i> 5 menit yang lalu</div>
                    </div>
                </div>
                <div class="feed-item">
                    <div class="feed-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="feed-content">
                        <div class="feed-text">Klien baru bergabung</div>
                        <div class="feed-time"><i class="far fa-clock"></i> 25 menit yang lalu</div>
                    </div>
                </div>
                <div class="feed-item">
                    <div class="feed-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="feed-content">
                        <div class="feed-text">Mendapatkan penghargaan desain</div>
                        <div class="feed-time"><i class="far fa-clock"></i> 1 jam yang lalu</div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <a href="#" class="action-btn">
                    <i class="fas fa-plus-circle"></i>
                    <span>Buat Baru</span>
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-chart-bar"></i>
                    <span>Laporan</span>
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-download"></i>
                    <span>Ekspor</span>
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-share-alt"></i>
                    <span>Bagikan</span>
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="dashboard-footer">
            <div>
                <i class="far fa-copyright"></i> 2024 Cerah Dashboard. All rights reserved.
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </div>

    <script>
        // Dynamic date and time
        function updateDateTime() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            document.getElementById('currentDate').textContent = now.toLocaleDateString('id-ID', options);
            document.getElementById('currentTime').textContent = now.toLocaleTimeString('id-ID', { 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit'
            });
        }
        
        updateDateTime();
        setInterval(updateDateTime, 1000);

        // Add active class to current nav item
        document.addEventListener('DOMContentLoaded', function() {
            const currentLocation = window.location.pathname;
            const navLinks = document.querySelectorAll('nav ul li a');
            
            navLinks.forEach(link => {
                if(link.getAttribute('href') === currentLocation) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>