<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Team</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            padding: 20px;
            background: linear-gradient(-45deg, #667eea, #764ba2, #6b73ff, #9d50bb);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* NAVBAR */
        .navbar {
            max-width: 1100px;
            margin: 0 auto 30px;
            background: rgba(255,255,255,0.95);
            padding: 15px 30px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            animation: slideDown 0.8s ease;
        }

        .nav-link {
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transition: 0.3s;
        }

        .nav-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102,126,234,0.4);
        }

        /* CONTAINER */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: white;
            padding: 60px;
            border-radius: 25px;
            box-shadow: 0 25px 70px rgba(0,0,0,0.3);
            animation: fadeUp 1s ease;
        }

        .badge {
            display: inline-block;
            padding: 8px 16px;
            background: #4f46e5;
            color: white;
            border-radius: 999px;
            font-size: .85rem;
            margin-bottom: 15px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin: 60px 0 25px;
            text-align: center;
            color: #4f46e5;
        }

        p {
            text-align: center;
            line-height: 1.8;
            color: #555;
        }

        .intro {
            max-width: 700px;
            margin: 0 auto 40px;
            animation: fadeUp 1.2s ease;
        }

        /* TEAM */
        .team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .card {
            background: #f9fafb;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            animation: fadeUp 1.5s ease;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            margin-bottom: 15px;
            object-fit: cover;
            transition: 0.4s;
        }

        .card:hover .avatar {
            transform: rotate(8deg) scale(1.1);
        }

        .name {
            font-weight: 700;
            font-size: 1.1rem;
        }

        .role {
            font-size: .9rem;
            color: #6366f1;
            margin-bottom: 10px;
        }

        .desc {
            font-size: .9rem;
            color: #555;
        }

        /* VALUES */
        .values {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .value {
            background: #eef2ff;
            padding: 30px;
            border-radius: 20px;
            transition: 0.4s;
            animation: fadeUp 1.7s ease;
        }

        .value:hover {
            transform: translateY(-8px);
            background: #dbeafe;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            font-size: .85rem;
            color: #666;
            animation: fadeUp 2s ease;
        }

        /* Animations */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <nav class="navbar">
        <a href="{{ route('home') ?? '/home' }}" class="nav-link">
            🏠 Back To Home
        </a>
    </nav>

    <div class="container">

        <section class="intro">
            <span class="badge">Tentang Tim Kami</span>
            <h1>Kami Adalah Tim Kreatif & Teknologi</h1>
            <p>
                Kami berfokus pada pengembangan website modern menggunakan Laravel,
                PHP, dan teknologi terbaru. Dengan kolaborasi yang solid,
                kami mengubah ide menjadi solusi digital nyata.
            </p>
        </section>

        <section>
            <h2>Tim Kami</h2>
            <div class="team">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="avatar">
                    <div class="name">Jaya Cahya</div>
                    <div class="role">Team Leader / Backend Developer</div>
                    <p class="desc">Mengelola project dan membangun sistem backend Laravel.</p>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" class="avatar">
                    <div class="name">Frontend Developer</div>
                    <div class="role">UI Developer</div>
                    <p class="desc">Mendesain tampilan website yang responsif dan modern.</p>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" class="avatar">
                    <div class="name">UI/UX Designer</div>
                    <div class="role">Design Specialist</div>
                    <p class="desc">Menciptakan pengalaman pengguna yang menarik dan profesional.</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Nilai Tim</h2>
            <div class="values">
                <div class="value">
                    <h3>Kolaborasi</h3>
                    <p>Kami percaya hasil terbaik datang dari kerja sama tim.</p>
                </div>

                <div class="value">
                    <h3>Kualitas</h3>
                    <p>Kami berkomitmen menghasilkan kode yang rapi dan terstruktur.</p>
                </div>

                <div class="value">
                    <h3>Inovasi</h3>
                    <p>Kami selalu mengikuti perkembangan teknologi terbaru.</p>
                </div>
            </div>
        </section>

        <footer>
            © 2026 Tim Kami. All rights reserved.
        </footer>

    </div>

</body>
</html>
