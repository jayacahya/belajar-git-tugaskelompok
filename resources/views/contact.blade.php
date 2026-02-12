<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
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

        .about-link {
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
        }

        .about-link:hover {
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

        /* Grid Layout */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Contact Form Styles */
        .contact-form {
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .contact-form:hover {
            transform: translateY(-5px);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 0.95em;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1em;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.1);
        }

        .form-group input:hover,
        .form-group textarea:hover {
            border-color: #764ba2;
        }

        .form-group input.error,
        .form-group textarea.error {
            border-color: #dc3545;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102,126,234,0.3);
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        /* Contact Info Styles */
        .contact-info {
            background: linear-gradient(145deg, #667eea, #764ba2);
            padding: 30px;
            border-radius: 15px;
            color: white;
            box-shadow: 0 10px 30px rgba(102,126,234,0.3);
        }

        .contact-info h2 {
            color: white;
        }

        .contact-info h2::after {
            background: white;
        }

        .info-item {
            margin-bottom: 25px;
            padding: 15px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .info-item:hover {
            transform: translateX(10px);
            background: rgba(255,255,255,0.2);
        }

        .info-item h3 {
            margin-bottom: 10px;
            font-size: 1.2em;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-item p {
            color: white;
            margin-bottom: 5px;
            text-align: left;
            font-size: 1em;
            opacity: 0.9;
        }

        /* Map Styles */
        .map {
            margin-bottom: 40px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .map iframe {
            display: block;
            transition: transform 0.3s ease;
        }

        .map iframe:hover {
            transform: scale(1.02);
        }

        /* Social Media Styles */
        .social-media {
            text-align: center;
            padding: 30px;
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 50%;
            transition: all 0.3s ease;
            font-size: 1.2em;
            box-shadow: 0 5px 15px rgba(102,126,234,0.3);
        }

        .social-icon:hover {
            transform: translateY(-5px) rotate(360deg);
            box-shadow: 0 10px 25px rgba(102,126,234,0.5);
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        /* Loading Spinner */
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
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

        .contact-form,
        .contact-info,
        .map,
        .social-media {
            animation: fadeIn 0.8s ease-out;
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

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .info-item:hover {
                transform: none;
            }

            .social-icon {
                width: 45px;
                height: 45px;
                font-size: 1.1em;
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

            .contact-form,
            .contact-info,
            .map,
            .social-media {
                padding: 20px;
            }

            .social-icons {
                gap: 15px;
            }

            .social-icon {
                width: 40px;
                height: 40px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar dengan Laravel route -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') ?? '/home' }}" class="nav-link home-link {{ request()->routeIs('home') ? 'active' : '' }}" title="Kembali ke Beranda">
                <span>🏠</span> Home
            </a>
        </div>
        <div class="nav-right">
            <a href="{{ route('about') }}" class="nav-link about-link {{ request()->routeIs('about') ? 'active' : '' }}" title="Tentang Kami">
                <span>ℹ️</span> About
            </a>
        </div>
    </nav>

    <div class="container">
        <h1>Ini Contact</h1>
        
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In ratione ipsa perspiciatis enim, quibusdam est magnam sit. Dolore, quis quasi aut aspernatur architecto voluptatum ea, hic ipsam quod, dolor suscipit?</p>

        <!-- Alert Message -->
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

        <div class="contact-grid">
            <!-- Contact Form dengan Laravel -->
            <section class="contact-form">
                <h2>Kirim Pesan</h2>
                <form action="{{ route('contact.send') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="contoh@email.com" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="subjek">Subjek</label>
                        <input type="text" id="subjek" name="subjek" placeholder="Subjek pesan" value="{{ old('subjek') }}">
                        @error('subjek')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required>{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn" id="submitBtn">
                        <span id="btnText">Kirim Pesan</span>
                        <span id="btnSpinner" style="display: none;" class="spinner"></span>
                    </button>
                </form>
            </section>

            <!-- Contact Information -->
            <section class="contact-info">
                <h2>Informasi Kontak</h2>
                
                <div class="info-item">
                    <h3>📍 Alamat</h3>
                    <p>Jl. Contoh No. 123</p>
                    <p>Jakarta Pusat, 12345</p>
                    <p>Indonesia</p>
                </div>
                
                <div class="info-item">
                    <h3>📞 Telepon</h3>
                    <p>(021) 1234-5678</p>
                    <p>(021) 8765-4321</p>
                    <p>+62 812-3456-7890</p>
                </div>
                
                <div class="info-item">
                    <h3>✉️ Email</h3>
                    <p>info@example.com</p>
                    <p>support@example.com</p>
                    <p>marketing@example.com</p>
                </div>
                
                <div class="info-item">
                    <h3>🕒 Jam Operasional</h3>
                    <p>Senin - Jumat: 08.00 - 17.00</p>
                    <p>Sabtu: 08.00 - 14.00</p>
                    <p>Minggu: Tutup</p>
                </div>
            </section>
        </div>

        <!-- Google Maps -->
        <section class="map">
            <h2>Lokasi Kami</h2>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6091242782!2d106.77321513925764!3d-6.229728101955832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                    width="100%" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

        <!-- Social Media -->
        <section class="social-media">
            <h2>Ikuti Kami</h2>
            <div class="social-icons">
                <a href="#" class="social-icon" aria-label="Facebook">📘</a>
                <a href="#" class="social-icon" aria-label="Instagram">📷</a>
                <a href="#" class="social-icon" aria-label="Twitter">🐦</a>
                <a href="#" class="social-icon" aria-label="LinkedIn">🔗</a>
                <a href="#" class="social-icon" aria-label="YouTube">▶️</a>
            </div>
            <p style="margin-top: 20px; color: #666; text-align: center;">Ikuti media sosial kami untuk informasi terbaru</p>
        </section>
    </div>

    <script>
        // Loading spinner on form submit
        document.getElementById('contactForm')?.addEventListener('submit', function(e) {
            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnSpinner = document.getElementById('btnSpinner');
            
            btn.disabled = true;
            btnText.style.opacity = '0.7';
            btnSpinner.style.display = 'inline-block';
        });

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
    </script>
</body>
</html>