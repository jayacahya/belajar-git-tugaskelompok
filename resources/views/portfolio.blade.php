<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Tim - Cerah Dashboard</title>
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

        .bright-container {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 40px;
            box-shadow: 0 20px 40px -12px rgba(0, 20, 40, 0.15);
            padding: 32px;
        }

        /* Header */
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
        }

        .logo-text {
            font-size: 1.8em;
            font-weight: 700;
            background: linear-gradient(145deg, #2d3748, #1a202c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .date-badge {
            background: white;
            border: 1px solid #e2e8f0;
            padding: 12px 24px;
            border-radius: 50px;
            color: #4a5568;
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
        }

        nav ul li a i {
            font-size: 1.1em;
            color: #718096;
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

        /* Page Title */
        .page-title {
            margin-bottom: 40px;
            text-align: center;
        }

        .page-title h1 {
            font-size: 2.5em;
            color: #1a202c;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .page-title h1 i {
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 1.2em;
        }

        .page-title p {
            color: #718096;
            font-size: 1.2em;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Stats Summary */
        .team-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-bottom: 50px;
        }

        .stat-summary {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 28px;
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            transition: all 0.3s ease;
        }

        .stat-summary:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -10px rgba(255, 107, 107, 0.15);
            border-color: #ff6b6b;
        }

        .summary-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(145deg, #fff5f5, #ffe8e8);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ffcdcd;
        }

        .summary-icon i {
            font-size: 28px;
            color: #ff6b6b;
        }

        .summary-info h3 {
            color: #718096;
            font-size: 0.9em;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .summary-info .number {
            color: #1a202c;
            font-size: 1.8em;
            font-weight: 700;
            line-height: 1;
        }

        /* Filter Section */
        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .filter-tabs {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 12px 24px;
            border: 1px solid #e2e8f0;
            background: white;
            border-radius: 40px;
            color: #4a5568;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-btn i {
            color: #718096;
        }

        .filter-btn:hover {
            background: #fff5f5;
            border-color: #ff6b6b;
            color: #ff6b6b;
        }

        .filter-btn:hover i {
            color: #ff6b6b;
        }

        .filter-btn.active {
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            color: white;
            border-color: transparent;
        }

        .filter-btn.active i {
            color: white;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 40px;
            padding: 6px;
        }

        .search-box input {
            border: none;
            padding: 12px 20px;
            font-size: 1em;
            background: transparent;
            min-width: 250px;
            outline: none;
            color: #2d3748;
        }

        .search-box input::placeholder {
            color: #a0aec0;
        }

        .search-box button {
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            border: none;
            padding: 12px 24px;
            border-radius: 40px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-box button:hover {
            transform: scale(0.98);
            box-shadow: 0 8px 16px rgba(255, 107, 107, 0.3);
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .team-card {
            background: white;
            border-radius: 28px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 40px -15px rgba(255, 107, 107, 0.25);
            border-color: #ff6b6b;
        }

        .card-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(145deg, #ffd700, #ffed4e);
            color: #1a202c;
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 0.85em;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 6px 14px rgba(255, 215, 0, 0.25);
            z-index: 2;
        }

        .card-badge i {
            color: #1a202c;
        }

        .card-header {
            position: relative;
            padding: 40px 30px 20px;
            background: linear-gradient(145deg, #f8fafc, #edf2f7);
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
        }

        .avatar-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 30px;
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 16px;
            border: 4px solid white;
            box-shadow: 0 12px 24px -8px rgba(255, 107, 107, 0.3);
            transition: all 0.35s ease;
        }

        .team-card:hover .avatar {
            border-radius: 20px;
            transform: scale(0.95);
        }

        .avatar-img {
            width: 120px;
            height: 120px;
            border-radius: 30px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 12px 24px -8px rgba(255, 107, 107, 0.3);
        }

        .status-indicator {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 16px;
            height: 16px;
            background: #48bb78;
            border: 3px solid white;
            border-radius: 50%;
        }

        .card-header h3 {
            color: #1a202c;
            font-size: 1.4em;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .position {
            color: #ff6b6b;
            font-weight: 600;
            font-size: 1em;
            background: #fff5f5;
            padding: 8px 16px;
            border-radius: 30px;
            display: inline-block;
            margin-bottom: 12px;
        }

        .expertise {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin-top: 12px;
        }

        .expertise-tag {
            background: white;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.8em;
            font-weight: 600;
            color: #4a5568;
            border: 1px solid #e2e8f0;
            transition: all 0.25s ease;
        }

        .expertise-tag:hover {
            background: #ff6b6b;
            color: white;
            border-color: #ff6b6b;
        }

        .card-body {
            padding: 24px;
        }

        .bio {
            color: #718096;
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 0.95em;
        }

        .project-stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 24px;
            padding: 16px 0;
            border-top: 1px solid #edf2f7;
            border-bottom: 1px solid #edf2f7;
        }

        .project-stat {
            text-align: center;
        }

        .project-stat .stat-value {
            color: #1a202c;
            font-size: 1.2em;
            font-weight: 700;
        }

        .project-stat .stat-label {
            color: #a0aec0;
            font-size: 0.8em;
            font-weight: 600;
            text-transform: uppercase;
            margin-top: 4px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 24px;
        }

        .skill-tag {
            background: #f7fafc;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.8em;
            font-weight: 600;
            color: #4a5568;
            border: 1px solid #e2e8f0;
        }

        .card-footer {
            padding: 20px 24px;
            border-top: 1px solid #edf2f7;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fafcfc;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-link {
            width: 36px;
            height: 36px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #718096;
            transition: all 0.25s ease;
        }

        .social-link:hover {
            background: #ff6b6b;
            color: white;
            border-color: #ff6b6b;
            transform: translateY(-3px);
        }

        .contact-btn {
            background: linear-gradient(145deg, #ff6b6b, #ff8e8e);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9em;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
        }

        .contact-btn:hover {
            transform: scale(0.95);
            box-shadow: 0 8px 16px rgba(255, 107, 107, 0.3);
        }

        /* Achievement Section */
        .achievements-section {
            background: white;
            border-radius: 28px;
            padding: 40px;
            margin-bottom: 50px;
            border: 1px solid #e2e8f0;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
        }

        .section-header i {
            font-size: 2em;
            color: #ff6b6b;
            background: #fff5f5;
            padding: 16px;
            border-radius: 20px;
        }

        .section-header h2 {
            color: #1a202c;
            font-size: 1.8em;
            font-weight: 700;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .achievement-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            transition: all 0.25s ease;
        }

        .achievement-card:hover {
            background: white;
            border-color: #ff6b6b;
            transform: translateY(-4px);
        }

        .achievement-icon {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ffcdcd;
        }

        .achievement-icon i {
            font-size: 28px;
            color: #ff6b6b;
        }

        .achievement-info h4 {
            color: #1a202c;
            font-size: 1.1em;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .achievement-info p {
            color: #718096;
            font-size: 0.9em;
        }

        /* Join Team Banner */
        .join-banner {
            background: linear-gradient(145deg, #667eea, #764ba2);
            border-radius: 28px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 40px;
        }

        .join-content h3 {
            color: white;
            font-size: 1.8em;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .join-content p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1em;
        }

        .join-btn {
            background: white;
            color: #667eea;
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.25s ease;
        }

        .join-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.2);
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
            flex-wrap: wrap;
            gap: 20px;
        }

        .social-links-footer {
            display: flex;
            gap: 20px;
        }

        .social-links-footer a {
            color: #a0aec0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f7fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: all 0.25s ease;
        }

        .social-links-footer a:hover {
            background: #ff6b6b;
            color: white;
            border-color: #ff6b6b;
            transform: translateY(-3px);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: 32px;
            max-width: 500px;
            width: 90%;
            padding: 40px;
            position: relative;
            animation: modalSlide 0.3s ease;
        }

        @keyframes modalSlide {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            color: #a0aec0;
            transition: all 0.25s ease;
        }

        .close-modal:hover {
            color: #ff6b6b;
            transform: rotate(90deg);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .bright-container {
                padding: 24px;
            }
            
            .page-title h1 {
                font-size: 2em;
            }
            
            .filter-section {
                flex-direction: column;
            }
            
            .search-box {
                width: 100%;
            }
            
            .search-box input {
                min-width: auto;
                width: 100%;
            }
            
            .join-banner {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
            
            .card-footer {
                flex-direction: column;
                gap: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="bright-container">
        <!-- Header -->
        <div class="dashboard-header">
            <div class="logo-area">
                <div class="logo-icon">
                    <i class="fas fa-users"></i>
                </div>
                <span class="logo-text">TeamPortfolio</span>
            </div>
            <div class="date-badge">
                <i class="far fa-calendar-alt"></i>
                <span id="currentDate"></span>
                <i class="far fa-clock ms-2"></i>
                <span id="currentTime"></span>
            </div>
        </div>

        <!-- Navigation -->
        <div class="nav-wrapper">
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Beranda</a></li>
                    <li><a href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> Tentang</a></li>
                    <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Kontak</a></li>
                    <li><a href="{{ url('/services') }}"><i class="fas fa-cog"></i> Layanan</a></li>
                    <li><a href="{{ url('/portfolio') }}" class="active"><i class="fas fa-briefcase"></i> Portofolio</a></li>
                    <li><a href="{{ url('/team') }}"><i class="fas fa-users"></i> Tim</a></li>
                </ul>
            </nav>
        </div>

        <!-- Page Title -->
        <div class="page-title">
            <h1>
                <i class="fas fa-users-between-lines"></i>
                Portofolio Tim
            </h1>
            <p>Bertemu dengan tim kreatif dan profesional kami yang siap mewujudkan ide-ide Anda menjadi karya luar biasa</p>
        </div>

        <!-- Team Stats -->
        <div class="team-stats">
            <div class="stat-summary">
                <div class="summary-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="summary-info">
                    <h3>Total Anggota</h3>
                    <div class="number">24</div>
                </div>
            </div>
            <div class="stat-summary">
                <div class="summary-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="summary-info">
                    <h3>Penghargaan</h3>
                    <div class="number">47</div>
                </div>
            </div>
            <div class="stat-summary">
                <div class="summary-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="summary-info">
                    <h3>Total Pengalaman</h3>
                    <div class="number">128+ thn</div>
                </div>
            </div>
            <div class="stat-summary">
                <div class="summary-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="summary-info">
                    <h3>Klien Global</h3>
                    <div class="number">189+</div>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <div class="filter-tabs">
                <button class="filter-btn active">
                    <i class="fas fa-users"></i> Semua Tim
                </button>
                <button class="filter-btn">
                    <i class="fas fa-laptop-code"></i> Developer
                </button>
                <button class="filter-btn">
                    <i class="fas fa-paint-brush"></i> Designer
                </button>
                <button class="filter-btn">
                    <i class="fas fa-chart-line"></i> Marketing
                </button>
                <button class="filter-btn">
                    <i class="fas fa-headset"></i> Support
                </button>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Cari anggota tim..." id="searchInput">
                <button onclick="searchTeam()">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>
        </div>

        <!-- Team Grid -->
        <div class="team-grid">
            <!-- Card 1 - CEO & Founder -->
            <div class="team-card" data-category="leadership">
                <div class="card-badge">
                    <i class="fas fa-crown"></i> Founder
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar">
                            <span>AB</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Ahmad Budiman</h3>
                    <span class="position">CEO & Founder</span>
                    <div class="expertise">
                        <span class="expertise-tag">Leadership</span>
                        <span class="expertise-tag">Strategy</span>
                        <span class="expertise-tag">Innovation</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Visioner dengan pengalaman 15+ tahun di industri kreatif. Memimpin tim untuk menciptakan solusi inovatif.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">120+</div>
                            <div class="stat-label">Proyek</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">15</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">Strategic Planning</span>
                        <span class="skill-tag">Team Building</span>
                        <span class="skill-tag">Business Dev</span>
                        <span class="skill-tag">Investor Relations</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Ahmad Budiman')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 2 - Lead Developer -->
            <div class="team-card" data-category="developer">
                <div class="card-badge">
                    <i class="fas fa-code"></i> Lead Dev
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #667eea, #764ba2);">
                            <span>RS</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Rina Setiawati</h3>
                    <span class="position">Lead Developer</span>
                    <div class="expertise">
                        <span class="expertise-tag">Full Stack</span>
                        <span class="expertise-tag">AI/ML</span>
                        <span class="expertise-tag">Cloud</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Spesialis Full Stack dengan keahlian di AI dan Cloud Computing. Memimpin 10+ developer dalam pengembangan produk.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">85+</div>
                            <div class="stat-label">Proyek</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">6</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">React</span>
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">AWS</span>
                        <span class="skill-tag">TensorFlow</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-stack-overflow"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Rina Setiawati')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 3 - Creative Director -->
            <div class="team-card" data-category="designer">
                <div class="card-badge">
                    <i class="fas fa-palette"></i> Creative
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #ff6b6b, #ff8e8e);">
                            <span>DP</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Dian Prasetyo</h3>
                    <span class="position">Creative Director</span>
                    <div class="expertise">
                        <span class="expertise-tag">UI/UX</span>
                        <span class="expertise-tag">Branding</span>
                        <span class="expertise-tag">Illustration</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Desainer kreatif dengan sentuhan artistik modern. Telah menangani branding untuk 50+ perusahaan ternama.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">200+</div>
                            <div class="stat-label">Proyek</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">10</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">9</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Adobe XD</span>
                        <span class="skill-tag">Photoshop</span>
                        <span class="skill-tag">Illustrator</span>
                        <span class="skill-tag">After Effects</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Dian Prasetyo')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 4 - Product Manager -->
            <div class="team-card" data-category="leadership">
                <div class="card-badge">
                    <i class="fas fa-chart-line"></i> PM
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #38a169, #48bb78);">
                            <span>MW</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Maya Wijaya</h3>
                    <span class="position">Product Manager</span>
                    <div class="expertise">
                        <span class="expertise-tag">Product Strategy</span>
                        <span class="expertise-tag">Agile</span>
                        <span class="expertise-tag">Analytics</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Product Manager dengan fokus pada user-centric design. Berpengalaman meluncurkan 30+ produk digital.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">45+</div>
                            <div class="stat-label">Produk</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">7</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">Jira</span>
                        <span class="skill-tag">Product Roadmap</span>
                        <span class="skill-tag">User Research</span>
                        <span class="skill-tag">Scrum</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-medium"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-product-hunt"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Maya Wijaya')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 5 - Marketing Lead -->
            <div class="team-card" data-category="marketing">
                <div class="card-badge">
                    <i class="fas fa-bullhorn"></i> Marketing
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #ed8936, #f6ad55);">
                            <span>BH</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Budi Hartono</h3>
                    <span class="position">Marketing Lead</span>
                    <div class="expertise">
                        <span class="expertise-tag">Digital Marketing</span>
                        <span class="expertise-tag">SEO/SEM</span>
                        <span class="expertise-tag">Social Media</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Pakar digital marketing dengan track record meningkatkan conversion rate hingga 200% untuk klien.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">150+</div>
                            <div class="stat-label">Kampanye</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">9</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">Google Ads</span>
                        <span class="skill-tag">Meta Ads</span>
                        <span class="skill-tag">SEO</span>
                        <span class="skill-tag">Analytics</span>
                        <span class="skill-tag">Content Strategy</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Budi Hartono')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 6 - UX Researcher -->
            <div class="team-card" data-category="designer">
                <div class="card-badge">
                    <i class="fas fa-users"></i> UX Research
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #9f7aea, #b794f4);">
                            <span>SN</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Siti Nurhaliza</h3>
                    <span class="position">UX Researcher</span>
                    <div class="expertise">
                        <span class="expertise-tag">User Research</span>
                        <span class="expertise-tag">Usability Testing</span>
                        <span class="expertise-tag">Persona</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Ahli dalam memahami perilaku pengguna. Telah melakukan riset untuk 100+ aplikasi dan website.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">3000+</div>
                            <div class="stat-label">Responden</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">6</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">4</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">User Interview</span>
                        <span class="skill-tag">A/B Testing</span>
                        <span class="skill-tag">Persona Creation</span>
                        <span class="skill-tag">Journey Map</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-medium"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-researchgate"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Siti Nurhaliza')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 7 - DevOps Engineer -->
            <div class="team-card" data-category="developer">
                <div class="card-badge">
                    <i class="fas fa-cloud"></i> DevOps
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #0b5e7c, #2c7da0);">
                            <span>AP</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Agus Pratama</h3>
                    <span class="position">DevOps Engineer</span>
                    <div class="expertise">
                        <span class="expertise-tag">Cloud</span>
                        <span class="expertise-tag">CI/CD</span>
                        <span class="expertise-tag">Infrastructure</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Spesialis infrastruktur cloud dengan pengalaman migrasi 50+ sistem ke AWS dan Google Cloud.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">70+</div>
                            <div class="stat-label">Proyek</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">7</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Cert</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">AWS</span>
                        <span class="skill-tag">Docker</span>
                        <span class="skill-tag">Kubernetes</span>
                        <span class="skill-tag">Terraform</span>
                        <span class="skill-tag">Jenkins</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-aws"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Agus Pratama')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>

            <!-- Card 8 - Content Strategist -->
            <div class="team-card" data-category="marketing">
                <div class="card-badge">
                    <i class="fas fa-pen-fancy"></i> Content
                </div>
                <div class="card-header">
                    <div class="avatar-wrapper">
                        <div class="avatar" style="background: linear-gradient(145deg, #d53f8c, #ed64a6);">
                            <span>DR</span>
                        </div>
                        <div class="status-indicator"></div>
                    </div>
                    <h3>Dewi Rahmawati</h3>
                    <span class="position">Content Strategist</span>
                    <div class="expertise">
                        <span class="expertise-tag">Copywriting</span>
                        <span class="expertise-tag">Content Plan</span>
                        <span class="expertise-tag">Storytelling</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="bio">Content writer kreatif dengan gaya storytelling yang engaging. Meningkatkan engagement rate hingga 180%.</p>
                    <div class="project-stats">
                        <div class="project-stat">
                            <div class="stat-value">500+</div>
                            <div class="stat-label">Articles</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">6</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="project-stat">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                    <div class="skills">
                        <span class="skill-tag">SEO Writing</span>
                        <span class="skill-tag">Copywriting</span>
                        <span class="skill-tag">Content Planning</span>
                        <span class="skill-tag">Brand Voice</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="#" class="contact-btn" onclick="openModal('Dewi Rahmawati')">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </div>
            </div>
        </div>

        <!-- Achievements Section -->
        <div class="achievements-section">
            <div class="section-header">
                <i class="fas fa-trophy"></i>
                <h2>Pencapaian Tim</h2>
            </div>
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-info">
                        <h4>Awwwards Site of the Day</h4>
                        <p>2023 - Corporate Website</p>
                    </div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-info">
                        <h4>CSS Design Awards</h4>
                        <p>2023 - UI/UX Design</p>
                    </div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-info">
                        <h4>Indonesia Digital Award</h4>
                        <p>2022 - Best Digital Agency</p>
                    </div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-info">
                        <h4>Google Partner Award</h4>
                        <p>2022 - Innovation in Tech</p>
                    </div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-info">
                        <h4>Red Dot Design</h4>
                        <p>2021 - Product Design</p>
                    </div>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-info">
                        <h4>IF Design Award</h4>
                        <p>2021 - Mobile App</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Join Team Banner -->
        <div class="join-banner">
            <div class="join-content">
                <h3>Bergabung dengan Tim Kami</h3>
                <p>Kami selalu mencari talenta berbakat untuk berkembang bersama</p>
            </div>
            <a href="#" class="join-btn" onclick="openModal('Karir')">
                <i class="fas fa-paper-plane"></i> Kirim Lamaran
            </a>
        </div>

        <!-- Footer -->
        <div class="dashboard-footer">
            <div>
                <i class="far fa-copyright"></i> 2024 TeamPortfolio. All rights reserved.
            </div>
            <div class="social-links-footer">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </div>

    <!-- Modal Kontak -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <div style="text-align: center; margin-bottom: 24px;">
                <div style="width: 80px; height: 80px; background: linear-gradient(145deg, #ff6b6b, #ff8e8e); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-envelope" style="font-size: 36px; color: white;"></i>
                </div>
                <h2 style="color: #1a202c; margin-bottom: 8px;" id="modalTitle">Hubungi Tim</h2>
                <p style="color: #718096;" id="modalDescription">Isi form di bawah untuk menghubungi anggota tim</p>
            </div>
            <form>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Nama Lengkap</label>
                    <input type="text" placeholder="Masukkan nama Anda" style="width: 100%; padding: 14px 18px; border: 1px solid #e2e8f0; border-radius: 16px; font-size: 1em; outline: none; transition: all 0.25s ease;" onfocus="this.style.borderColor='#ff6b6b'">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Email</label>
                    <input type="email" placeholder="Masukkan email Anda" style="width: 100%; padding: 14px 18px; border: 1px solid #e2e8f0; border-radius: 16px; font-size: 1em; outline: none;" onfocus="this.style.borderColor='#ff6b6b'">
                </div>
                <div style="margin-bottom: 24px;">
                    <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Pesan</label>
                    <textarea rows="4" placeholder="Tulis pesan Anda..." style="width: 100%; padding: 14px 18px; border: 1px solid #e2e8f0; border-radius: 16px; font-size: 1em; outline: none; resize: none;" onfocus="this.style.borderColor='#ff6b6b'"></textarea>
                </div>
                <button type="submit" style="width: 100%; padding: 16px; background: linear-gradient(145deg, #ff6b6b, #ff8e8e); color: white; border: none; border-radius: 40px; font-size: 1.1em; font-weight: 700; cursor: pointer; transition: all 0.25s ease; display: flex; align-items: center; justify-content: center; gap: 12px;" onmouseover="this.style.transform='scale(0.98)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                </button>
            </form>
        </div>
    </div>

    <script>
        // Update date and time
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

        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const teamCards = document.querySelectorAll('.team-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filterBtns.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const category = this.textContent.trim().toLowerCase();
                
                teamCards.forEach(card => {
                    if (category === 'semua tim' || category.includes('semua')) {
                        card.style.display = 'block';
                    } else if (category.includes('developer') && card.dataset.category === 'developer') {
                        card.style.display = 'block';
                    } else if (category.includes('designer') && card.dataset.category === 'designer') {
                        card.style.display = 'block';
                    } else if (category.includes('marketing') && card.dataset.category === 'marketing') {
                        card.style.display = 'block';
                    } else if (category.includes('support') && card.dataset.category === 'support') {
                        card.style.display = 'block';
                    } else if (category.includes('leadership') && card.dataset.category === 'leadership') {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Search functionality
        function searchTeam() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            
            teamCards.forEach(card => {
                const name = card.querySelector('h3').textContent.toLowerCase();
                const position = card.querySelector('.position').textContent.toLowerCase();
                const bio = card.querySelector('.bio').textContent.toLowerCase();
                
                if (name.includes(filter) || position.includes(filter) || bio.includes(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Modal functionality
        function openModal(personName) {
            const modal = document.getElementById('contactModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalDesc = document.getElementById('modalDescription');
            
            modalTitle.textContent = `Hubungi ${personName}`;
            modalDesc.textContent = `Isi form di bawah untuk menghubungi ${personName}`;
            
            modal.style.display = 'flex';
        }

        function closeModal() {
            const modal = document.getElementById('contactModal');
            modal.style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('contactModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // Enter key for search
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchTeam();
            }
        });
    </script>
</body>
</html>