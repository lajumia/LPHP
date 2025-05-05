<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to LPHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-color: #1a202c;
            color: #e2e8f0;
            font-family: 'Inter', sans-serif;
        }
        .container {
            max-width: 960px;
            margin: 80px auto;
            padding: 20px;
            text-align: center;
        }
        .logo {
            font-size: 36px;
            font-weight: 600;
            color: #f56565;
            margin-bottom: 40px;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            background: #2d3748;
            border-radius: 8px;
            padding: 20px;
        }
        .card {
            background-color: #2d3748;
            text-align: left;
            padding: 20px;
            border-radius: 6px;
        }
        .card h3 {
            color: #e2e8f0;
            font-size: 16px;
            margin-bottom: 8px;
        }
        .card p {
            font-size: 14px;
            color: #a0aec0;
        }
        .footer {
            margin-top: 40px;
            font-size: 13px;
            color: #718096;
        }
        .links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 24px;
        }
        .links a {
            color: #63b3ed;
            text-decoration: none;
            font-weight: 500;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">LPHP</div>
        <div class="grid">
            <div class="card">
                <h3>📘 Documentation</h3>
                <p>LPHP has wonderful, thorough documentation covering every aspect of the framework.</p>
            </div>
            <div class="card">
                <h3>📺 Laracasts</h3>
                <p>Watch videos about Laravel, PHP, JavaScript, and LPHP from the best platforms online.</p>
            </div>
            <div class="card">
                <h3>📰 LPHP News</h3>
                <p>Community-driven tutorials, package releases and the latest LPHP ecosystem news.</p>
            </div>
            <div class="card">
                <h3>🌐 Vibrant Ecosystem</h3>
                <p>LPHP includes tools like Forge, Vapor, Nova — plus open source libraries to build faster.</p>
            </div>
        </div>
        <div class="links">
            <a href="#">Shop</a>
            <a href="#">Sponsor</a>
        </div>
        <div class="footer">Build v1.0.0</div>
    </div>
</body>
</html>
