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
    font-family: 'Segoe UI', sans-serif;
}

body {
    min-height: 100vh;
    background: linear-gradient(-45deg, #667eea, #764ba2, #6b73ff, #9d50bb);
    background-size: 400% 400%;
    animation: gradientMove 12s ease infinite;
    padding: 20px;
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
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(15px);
    padding: 15px 30px;
    border-radius: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    animation: slideDown 0.8s ease;
}

.nav-title {
    color: white;
    font-weight: bold;
    font-size: 1rem;
}

.nav-link {
    text-decoration: none;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 25px;
    background: white;
    color: #4f46e5;
    transition: 0.3s;
}

.nav-link:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

/* CONTAINER */
.container {
    max-width: 1100px;
    margin: auto;
    background: white;
    padding: 60px;
    border-radius: 25px;
    box-shadow: 0 25px 70px rgba(0,0,0,0.3);
    animation: fadeUp 1s ease;
}

.badge {
    display: inline-block;
    padding: 8px 18px;
    background: #4f46e5;
    color: white;
    border-radius: 999px;
    font-size: .85rem;
    margin-bottom: 15px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    50% { transform: scale(1.05); }
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-align: center;
}

.intro {
    max-width: 700px;
    margin: auto;
    text-align: center;
    line-height: 1.8;
    color: #555;
}

h2 {
    margin: 60px 0 30px;
    text-align: center;
    color: #4f46e5;
}

/* TEAM */
.team {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 30px;
}

.card {
    background: #f9fafb;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    transition: all 0.4s ease;
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
}

.value {
    background: #eef2ff;
    padding: 30px;
    border-radius: 20px;
    transition: 0.4s;
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
}

/* Animations */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideDown {
    from { opacity: 0; transform: translateY(-40px); }
    to { opacity: 1; transform: translateY(0); }
}

@media(max-width:768px){
    .container { padding: 30px; }
    h1 { font-size: 2rem; }
}

</style>
</head>
<body>

<nav class="navbar">
    <div class="nav-title">🚀 Tim Developer</div>
    <a href="{{ route('home') }}" class="nav-link">🏠 Back To Home</a>
</nav>

<div class="container">

    <div class="intro">
        <span class="badge">Tentang Tim Kami</span>
        <h1>Kami Membangun Solusi Digital Modern</h1>
        <p>
            Tim kami berfokus pada pengembangan sistem berbasis Laravel dan PHP
            dengan desain modern, struktur rapi, dan kolaborasi yang solid.
        </p>
    </div>

    <h2>Tim Kami</h2>
    <div class="team">
        <div class="card">
            <img src="https://via.placeholder.com/150" class="avatar">
            <div class="name">Jaya Cahya</div>
            <div class="role">Team Leader / Backend</div>
            <p class="desc">Mengatur project dan membangun sistem backend Laravel.</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/150" class="avatar">
            <div class="name">Nur Akbar</div>
            <div class="role">UI Developer</div>
            <p class="desc">Mendesain tampilan website responsif dan modern.</p>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/150" class="avatar">
            <div class="name">Arkhana Biyu</div>
            <div class="role">Design Specialist</div>
            <p class="desc">Menciptakan pengalaman pengguna yang menarik.</p>
        </div>
    </div>

    <h2>Nilai Tim</h2>
    <div class="values">
        <div class="value">
            <h3>Kolaborasi</h3>
            <p>Kami percaya hasil terbaik datang dari kerja sama tim.</p>
        </div>
        <div class="value">
            <h3>Kualitas</h3>
            <p>Kami menghasilkan kode yang rapi dan terstruktur.</p>
        </div>
        <div class="value">
            <h3>Inovasi</h3>
            <p>Kami selalu mengikuti perkembangan teknologi terbaru.</p>
        </div>
    </div>

    <footer>
        © 2026 Tim Developer. All rights reserved.
    </footer>

</div>

</body>
</html>
