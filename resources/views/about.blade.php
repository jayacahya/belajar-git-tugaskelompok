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
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
            padding: 20px;
        }

        /* NAVBAR */
        .navbar {
            max-width: 1100px;
            margin: 0 auto 30px;
            background: white;
            padding: 15px 30px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transition: 0.3s;
        }

        .nav-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102,126,234,0.4);
        }

        /* CONTAINER */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin: 50px 0 20px;
            text-align: center;
            color: #4f46e5;
        }

        p {
            text-align: center;
            line-height: 1.8;
            color: #555;
        }

        .badge {
            display: inline-block;
            padding: 8px 16px;
            background: #4f46e5;
            color: white;
            border-radius: 999px;
            font-size: .85rem;
            margin-bottom: 15px;
        }

        .intro {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        /* TEAM */
        .team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .card {
            background: #f9fafb;
            padding: 25px;
            border-radius: 16px;
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 28px rgba(0,0,0,.1);
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            margin-bottom: 15px;
            object-fit: cover;
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
            padding: 25px;
            border-radius: 16px;
        }

        .value h3 {
            margin-bottom: 10px;
            color: #4f46e5;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: .85rem;
            color: #666;
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
                Kami adalah tim yang berfokus pada pengembangan website dan aplikasi web
                modern menggunakan Laravel, PHP, dan teknologi terbaru.
                Dengan kolaborasi yang solid, kami mengubah ide menjadi solusi digital nyata.
            </p>
        </section>

        <section>
            <h2>Tim Kami</h2>
            <div class="team">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="avatar">
                    <div class="name">PKL Team</div>
                    <div class="role">Team Leader / Backend Developer</div>
                    <p class="desc">
                        Mengelola project dan mengembangkan sistem backend menggunakan Laravel.
                    </p>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" class="avatar">
                    <div class="name">Frontend Developer</div>
                    <div class="role">UI Developer</div>
                    <p class="desc">
                        Bertanggung jawab atas tampilan website yang responsif dan user-friendly.
                    </p>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" class="avatar">
                    <div class="name">UI/UX Designer</div>
                    <div class="role">Design Specialist</div>
                    <p class="desc">
                        Mendesain pengalaman pengguna yang menarik dan profesional.
                    </p>
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
