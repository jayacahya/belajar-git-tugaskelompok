<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Our Team</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, sans-serif; }
    body { background: linear-gradient(135deg, #f5f7fa, #c3cfe2); color: #333; }
    .container { max-width: 1100px; margin: 60px auto; padding: 40px; background: #fff; border-radius: 18px; box-shadow: 0 20px 40px rgba(0,0,0,.1); }
    h1 { font-size: 2.6rem; margin-bottom: 16px; text-align: center; }
    h2 { margin: 48px 0 20px; color: #4f46e5; text-align: center; }
    p { line-height: 1.8; margin-bottom: 16px; text-align: center; }

    .intro { max-width: 700px; margin: 0 auto 40px; }
    .badge { display: inline-block; padding: 8px 16px; background: #4f46e5; color: #fff; border-radius: 999px; font-size: .85rem; margin-bottom: 14px; }

    .team { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 28px; margin-top: 40px; }
    .card { background: #f9fafb; border-radius: 16px; padding: 24px; text-align: center; transition: .3s; }
    .card:hover { transform: translateY(-6px); box-shadow: 0 14px 28px rgba(0,0,0,.1); }
    .avatar { width: 110px; height: 110px; border-radius: 50%; margin-bottom: 14px; object-fit: cover; }
    .name { font-weight: 700; font-size: 1.1rem; }
    .role { font-size: .9rem; color: #6366f1; margin-bottom: 10px; }
    .desc { font-size: .9rem; color: #555; }

    .values { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-top: 32px; }
    .value { background: #eef2ff; padding: 24px; border-radius: 16px; }
    .value h3 { margin-bottom: 10px; color: #4f46e5; }

    .cta { margin-top: 60px; padding: 32px; background: linear-gradient(135deg, #4f46e5, #6366f1); color: #fff; border-radius: 18px; text-align: center; }
    .cta a { display: inline-block; margin-top: 14px; padding: 14px 28px; background: #fff; color: #4f46e5; border-radius: 999px; text-decoration: none; font-weight: 600; }

    footer { text-align: center; margin-top: 40px; font-size: .85rem; color: #666; }
  </style>
</head>
<body>
  <div class="container">
    <section class="intro">
      <span class="badge">Tentang Tim Kami</span>
      <h1>Kami Adalah Tim Kreatif & Teknologi</h1>
      <p>
        Kami adalah tim yang berfokus pada pengembangan website dan aplikasi web
        yang modern, fungsional, dan mudah digunakan. Dengan kolaborasi dan
        komunikasi yang baik, kami mengubah ide menjadi solusi digital nyata.
      </p>
    </section>

    <section>
      <h2>Tim Kami</h2>
      <div class="team">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="avatar" />
          <div class="name">Jaya Cahya</div>
          <div class="role">Team Leader / Backend Developer</div>
          <p class="desc">Mengelola project dan mengembangkan sistem backend menggunakan PHP & Laravel.</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/150" class="avatar" />
          <div class="name">Anggota Tim</div>
          <div class="role">Frontend Developer</div>
          <p class="desc">Membuat tampilan website yang responsif dan user-friendly.</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/150" class="avatar" />
          <div class="name">Anggota Tim</div>
          <div class="role">UI/UX Designer</div>
          <p class="desc">Merancang pengalaman pengguna dan desain antarmuka yang menarik.</p>
        </div>
      </div>
    </section>

    <section>
      <h2>Nilai Tim</h2>
      <div class="values">
        <div class="value">
          <h3>Kolaborasi</h3>
          <p>Kami percaya hasil terbaik datang dari kerja sama dan komunikasi yang baik.</p>
        </div>
        <div class="value">
          <h3>Kualitas</h3>
          <p>Kami berkomitmen memberikan hasil terbaik dengan kode yang rapi dan terstruktur.</p>
        </div>
        <div class="value">
          <h3>Inovasi</h3>
          <p>Kami terus belajar dan beradaptasi dengan teknologi terbaru.</p>
        </div>
      </div>
    </section>

    <div class="cta">
      <h2>Mari Bekerja Sama</h2>
      <p>Kami siap membantu mewujudkan ide digital Anda.</p>
      <a href="#contact">Hubungi Tim</a>
    </div>

    <footer>
      © 2026 Tim Kami. All rights reserved.
    </footer>
  </div>
</body>
</html>
