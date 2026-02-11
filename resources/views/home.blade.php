<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>ini home</h1>
    
    <nav>
        <ul>
            <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
            <li><a href="{{ route('contact') }}">Kontak</a></li>
            <li><a href="/about">Tentang Kami (Alternatif)</a></li>
            <li><a href="/contact">Kontak (Alternatif)</a></li>
        </ul>
    </nav>
    
    <div class="content">
        @yield('content')
    </div>
</body>
</html>