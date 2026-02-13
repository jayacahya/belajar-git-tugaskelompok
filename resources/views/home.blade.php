<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 3em;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 20px;
        }

        h1:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #667eea, #764ba2);
            border-radius: 2px;
        }

        nav {
            margin-bottom: 40px;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            gap: 30px;
            flex-wrap: wrap;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: #555;
            font-size: 1.2em;
            font-weight: 600;
            padding: 12px 24px;
            background: #f8f9fa;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav ul li a:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        nav ul li a.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .content {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: inset 0 2px 10px rgba(0,0,0,0.03);
            border: 1px solid #f1f1f1;
            line-height: 1.6;
            color: #555;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 2.2em;
            }

            nav ul {
                gap: 15px;
            }

            nav ul li a {
                padding: 10px 20px;
                font-size: 1em;
            }

            .content {
                padding: 25px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px 10px;
            } 

            .container {
                padding: 20px 15px;
            }

            h1 {
                font-size: 1.8em;
            }

            nav ul li a {
                padding: 8px 16px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🏠 Home</h1>
        
        <nav>
            <ul>
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Tentang Kami</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Kontak</a></li>
            </ul>
        </nav>
        
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>