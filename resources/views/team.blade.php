<!DOCTYPE html>
<html>
<head>
    <title>Our Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(-45deg, #667eea, #764ba2, #6a11cb, #2575fc);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            color: white;
            overflow-x: hidden;
        }

        @keyframes gradientMove {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        /* BACK BUTTON */
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            background: white;
            color: #333;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #333;
            color: white;
            transform: translateX(-5px);
        }

        .container {
            text-align: center;
            padding: 80px 20px;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 50px;
            opacity: 0;
            transform: translateY(-40px);
            animation: fadeDown 1s ease forwards;
        }

        @keyframes fadeDown {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .team {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .card {
            background: white;
            color: #333;
            width: 250px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 0.8s ease forwards;
        }

        .card:nth-child(1) { animation-delay: 0.5s; }
        .card:nth-child(2) { animation-delay: 0.8s; }
        .card:nth-child(3) { animation-delay: 1.1s; }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
            transition: 0.3s;
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }

        h3 {
            margin: 10px 0;
        }

        p {
            color: gray;
        }
    </style>
</head>
<body>

<!-- BACK BUTTON -->
<a href="{{ route('home') }}" class="back-btn">← Back to Home</a>

<div class="container">
    <h1>Meet Our Team</h1>

    <div class="team">
        <div class="card">
            <h3>Jaya Cahya</h3>
            <p>Project Leader</p>
        </div>

        <div class="card">
            <h3>Member 1</h3>
            <p>Frontend Developer</p>
        </div>

        <div class="card">
            <h3>Member 2</h3>
            <p>Backend Developer</p>
        </div>
    </div>
</div>

</body>
</html>
