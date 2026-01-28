<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KainLokal - Marketplace Batik Nusantara</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", sans-serif;
            margin: 0;
            background: #f9fafb;
            color: #111;
            overflow-x: hidden;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 200;
        }



        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .brand h2 {
            font-size: 20px;
            margin: 0;
            font-weight: 700;
            color: white;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            transition: 0.3s;
        }

        nav a:hover {
            color: white;
        }

        .nav-transparent {
            position: absolute;
            background: transparent;
        }

        .nav-transparent h2,
        .nav-transparent nav a {
            color: rgba(255, 255, 255, 0.9);
        }

        .nav-solid {
            position: relative;
            background: white;
            border-bottom: 1px solid #eee;
        }

        .nav-solid h2 {
            color: black;
        }

        .nav-solid nav a {
            color: #111;
        }

        .nav-solid nav a:hover {
            color: #b91c1c;
        }

        .hero {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: flex-end;
            padding: 90px;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .hero-content {
            position: relative;
            color: white;
            max-width: 700px;
            padding-bottom: 50px;
        }

        .hero-content h1 {
            font-size: 70px;
            font-weight: 900;
            margin: 0;
            letter-spacing: 1px;
        }

        .hero-content p {
            font-size: 18px;
            line-height: 1.7;
            margin-top: 15px;
            color: rgba(255, 255, 255, 0.85);
        }

        .hero-buttons {
            margin-top: 28px;
        }

        .btn-primary {
            display: inline-block;
            padding: 14px 30px;
            border-radius: 30px;
            background: white;
            color: black;
            font-weight: 700;
            text-decoration: none;
            margin-right: 15px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #facc15;
            color: black;
        }

        .btn-secondary {
            display: inline-block;
            padding: 14px 30px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .scroll-indicator {
            position: absolute;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            text-align: center;
            animation: bounce 1.5s infinite;
        }

        .scroll-indicator span {
            display: block;
            font-size: 22px;
            margin-top: 5px;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translate(-50%, 0);
            }

            50% {
                transform: translate(-50%, -10px);
            }
        }

        .section {
            max-width: 1100px;
            margin: auto;
            padding: 70px 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #111;
            color: white;
            margin-top: 70px;
        }


        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .product-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transition: 0.25s;
        }

        .product-card:hover {
            transform: translateY(-6px);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card h3 {
            font-size: 20px;
            margin: 15px;
            font-weight: 800;
        }

        .product-card p {
            margin: 0 15px;
            font-size: 14px;
            color: #555;
        }

        .product-card span {
            display: block;
            margin: 12px 15px;
            font-size: 16px;
            font-weight: 700;
        }

        /* PRODUCT BUTTON */
        .product-btn {
            display: block;
            text-align: center;
            margin: 15px;
            padding: 12px;
            border-radius: 30px;
            background: black;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .product-btn:hover {
            background: #facc15;
            color: black;
        }

        .voc-card {
            margin-top: 35px;
            padding: 35px;
            border-radius: 22px;
            background: linear-gradient(120deg,
                    rgba(250, 204, 21, 0.15),
                    rgba(0, 0, 0, 0.05));
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        .voc-card h2 {
            font-size: 26px;
            margin: 0 0 10px;
            font-weight: 900;
        }

        .voc-card p {
            margin: 0 0 22px;
            font-size: 15px;
            color: #444;
            max-width: 600px;
        }
    </style>
</head>

<body>

    <header class="@yield('navbar-style')">

        <div class="brand">
            <img src="/Logo.jpeg" alt="KainLokal Logo">
            <h2>KainLokal</h2>
        </div>

        <nav>
            <a href="/">Home</a>
            <a href="/catalogue">Catalogue</a>
            <a href="/voc">VoC</a>
        </nav>
    </header>

    @yield('content')

    <footer>
        © {{ date('Y') }} KainLokal — Made with ❤️ B
    </footer>

</body>

</html>