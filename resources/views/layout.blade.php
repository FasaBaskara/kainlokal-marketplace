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

        /* .nav-solid {
            position: relative;
            background: white;
            border-bottom: 1px solid #eee;
        } */

        .nav-solid h2 {
            color: black;
        }

        .nav-solid nav a {
            color: #111;
        }

        .nav-solid nav a:hover {
            color: #b91c1c;
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
            padding-top: 120px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }


        .product-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }


        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: none;
            border: 1px solid #eee;
            transition: 0.25s;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-4px);
            border-color: #ccc;
        }

        .product-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .product-card h3 {
            font-size: 15px;
            font-weight: 600;
            margin: 12px 15px 5px;
        }

        .product-card p {
            margin: 0 15px;
            font-size: 14px;
            color: #555;
        }

        .product-card span {
            font-size: 14px;
            font-weight: 700;
            margin: 0 15px;
            display: block;
        }

        .product-link {
            text-decoration: none;
            color: inherit;
        }

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

        .product-image {
            overflow: hidden;
        }


        .product-image img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            transition: transform 0.35s ease;
        }

        .product-card:hover img {
            transform: scale(1.08);
        }

        .sold-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.75);
            color: white;
            font-size: 13px;
            font-weight: 700;
            padding: 7px 14px;
            border-radius: 20px;
            z-index: 10;
            text-transform: uppercase;
        }

        .stock-text {
            margin: 6px 15px 18px;
            font-size: 13px;
            color: #666;
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

        .catalogue-top {
            text-align: center;
            margin-bottom: 40px;
        }

        .catalogue-top h1 {
            font-size: 38px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .catalogue-top p {
            font-size: 15px;
            color: #555;
        }

        .catalogue-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 35px 0;
            gap: 20px;
        }

        .filters select,
        .sort select {
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
            background: white;
            cursor: pointer;
        }

        .shop-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 35px;
        }

        .shop-card {
            text-decoration: none;
            color: inherit;
            background: white;
            border: 1px solid #eee;
            border-radius: 16px;
            overflow: hidden;
            transition: 0.25s;
            position: relative;
        }

        .shop-card:hover {
            transform: translateY(-6px);
            border-color: #ccc;
        }

        .shop-img {
            overflow: hidden;
            background: #f5f5f5;
        }

        .shop-img img {
            width: 100%;
            height: 330px;
            object-fit: cover;
            transition: 0.35s ease;
        }

        .shop-card:hover img {
            transform: scale(1.08);
        }

        .shop-info {
            padding: 18px;
            text-align: center;
        }

        .shop-info h3 {
            font-size: 16px;
            font-weight: 700;
            margin: 10px 0 6px;
        }

        .price {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stars {
            font-size: 13px;
            color: #f59e0b;
            margin-bottom: 12px;
        }

        .stars span {
            color: #555;
            font-size: 12px;
        }

        .view-btn {
            font-size: 14px;
            padding: 10px;
            border-top: 1px solid #eee;
            color: #333;
            transition: 0.3s;
        }

        .shop-card:hover .view-btn {
            background: black;
            color: white;
        }

        .badge {
            position: absolute;
            top: 14px;
            left: 14px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .badge.sold {
            background: rgba(0, 0, 0, 0.75);
            color: white;
        }

        .sort form {
            margin: 0;
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-box input {
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 14px;
            width: 220px;
            outline: none;
        }

        .search-box input:focus {
            border-color: black;
        }

        .search-box button {
            padding: 10px 16px;
            border-radius: 10px;
            border: none;
            background: black;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
        }

        .search-box button:hover {
            background: #facc15;
            color: black;
        }

        /* ===== DETAIL LAYOUT ===== */
        /* ===== DETAIL PAGE ===== */
        .back-link {
            display: inline-block;
            margin-bottom: 25px;
            font-size: 14px;
            text-decoration: none;
            color: #444;
        }

        .detail-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: start;
            margin-top: 20px;
        }

        /* IMAGE */
        .detail-image {
            border-radius: 18px;
            overflow: hidden;
            background: #f5f5f5;
            border: 1px solid #eee;
        }

        .detail-image img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            transition: 0.4s ease;
        }

        .detail-image:hover img {
            transform: scale(1.05);
        }

        /* INFO */
        .detail-info h1 {
            font-size: 44px;
            font-weight: 900;
            margin: 0;
        }

        .detail-price {
            font-size: 22px;
            font-weight: 800;
            margin: 15px 0;
        }

        /* STOCK BADGE */
        .stock-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 20px;
            background: rgba(0, 0, 0, 0.08);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .stock-badge.sold {
            background: black;
            color: white;
        }

        /* DESC */
        .detail-desc {
            font-size: 15px;
            line-height: 1.7;
            color: #444;
            margin-top: 15px;
            max-width: 520px;
        }

        /* BUTTON */
        .detail-actions {
            margin-top: 35px;
        }

        .detail-btn {
            display: inline-block;
            padding: 14px 30px;
            border-radius: 30px;
            background: black;
            color: white;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
        }

        .detail-btn:hover {
            background: #facc15;
            color: black;
        }

        /* ===== SHOPIFY DETAIL STYLE ===== */

        .detail-shopify {
            max-width: 1200px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 60px;
            align-items: start;
        }

        /* LEFT IMAGE */
        .main-image {
            background: #f7f7f7;
            border-radius: 12px;
            overflow: hidden;
        }

        .main-image img {
            width: 100%;
            height: 620px;
            object-fit: contain;
        }

        .thumbs {
            display: flex;
            gap: 12px;
            margin-top: 15px;
        }

        .thumbs img {
            width: 90px;
            height: 90px;
            border: 1px solid #ddd;
            border-radius: 8px;
            object-fit: cover;
            cursor: pointer;
        }

        /* INFO */
        .detail-info h1 {
            font-size: 42px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .price {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stock {
            font-size: 14px;
            color: #444;
            margin-bottom: 25px;
        }

        /* BUTTONS */
        .btn-cart {
            width: 100%;
            padding: 16px;
            border: none;
            background: black;
            color: white;
            font-weight: 700;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 12px;
        }

        .btn-buy {
            width: 100%;
            padding: 16px;
            border: none;
            background: #222;
            color: white;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Accordion */
        .accordion details {
            border-top: 1px solid #ddd;
            padding: 14px 0;
        }

        .accordion summary {
            font-weight: 700;
            cursor: pointer;
            font-size: 14px;
        }

        .accordion p {
            font-size: 14px;
            color: #444;
            margin-top: 10px;
            line-height: 1.6;
        }

        /* Related */
        .related {
            margin-top: 35px;
        }

        .related h3 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .related-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 15px;
        }

        .related-item img {
            width: 55px;
            height: 55px;
            border-radius: 8px;
            object-fit: cover;
        }

        .related-item p {
            margin: 0;
            font-size: 14px;
            font-weight: 600;
        }

        .related-item span {
            font-size: 13px;
            color: #444;
        }

        .related-item a {
            font-size: 13px;
            text-decoration: none;
            color: black;
            border-bottom: 1px solid black;
        }

        .btn-buy {
            width: 100%;
            padding: 16px;
            display: block;
            text-align: center;
            background: #25D366;
            color: white;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            transition: 0.25s;
        }

        .btn-buy:hover {
            background: #1ebe5b;
            transform: translateY(-2px);
        }

        .btn-disabled {
            width: 100%;
            padding: 16px;
            text-align: center;
            background: #ccc;
            color: #666;
            font-weight: 700;
            border-radius: 6px;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .related-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.07);
            transition: 0.25s;
            position: relative;
        }

        .related-card:hover {
            transform: translateY(-5px);
        }

        .related-img {
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .related-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.35s;
        }

        .related-card:hover img {
            transform: scale(1.08);
        }

        .related-card h4 {
            margin: 12px;
            font-size: 15px;
            font-weight: 700;
        }

        .related-card p {
            margin: 0 12px 14px;
            font-size: 14px;
            font-weight: 600;
            color: #111;
        }

        .hero-modern {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            padding: 0 90px;
            position: relative;
            padding-top: 140px;
        }

        .hero-modern::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(250, 240, 220, 0.20);
        }

        .hero-text {
            position: relative;
            max-width: 520px;
            z-index: 2;
        }

        .hero-text h1 {
            font-size: 64px;
            font-weight: 900;
            margin: 0;
            color: #1f2937;
        }

        .hero-text p {
            font-size: 18px;
            font-weight: 700;
            margin-top: 18px;
            line-height: 1.7;
            color: rgba(31, 41, 55, 0.75);
        }

        .hero-buttons {
            margin-top: 25px;
            display: flex;
            gap: 15px;
        }

        .hero-btn {
            padding: 12px 26px;
            border-radius: 30px;
            border: 1px solid #111;
            text-decoration: none;
            font-weight: 600;
            color: black;
            background: white;
            transition: 0.3s;
        }

        .hero-btn:hover {
            background: black;
            color: white;
        }

        .hero-btn-outline {
            padding: 12px 26px;
            border-radius: 30px;
            border: 1px solid #111;
            text-decoration: none;
            font-weight: 600;
            color: black;
            background: transparent;
            transition: 0.3s;
        }

        .hero-btn-outline:hover {
            background: rgba(0, 0, 0, 0.08);
        }

        .about-card {
            background: rgba(255, 255, 255, 0.92);
            padding: 55px 60px;
            border-radius: 26px;
            max-width: 880px;
            margin: auto;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.10);
            position: relative;
            overflow: hidden;
        }

        .about-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 7px;
            background: linear-gradient(to bottom, #facc15, #111);
        }

        .about-card h2 {
            font-size: 30px;
            font-weight: 900;
            margin-bottom: 18px;
            color: #111;
        }

        .about-card p {
            font-size: 17px;
            line-height: 1.8;
            color: rgba(0, 0, 0, 0.70);
            max-width: 720px;
        }

        .about-card strong {
            color: black;
        }

        .image-banner {
            height: 520px;
            width: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
            margin-top: 80px;
            display: flex;
            align-items: flex-end;
        }

        .image-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
        }

        .image-overlay {
            position: relative;
            padding: 60px;
            max-width: 600px;
            color: white;
            z-index: 2;
        }

        .image-overlay h2 {
            font-size: 36px;
            margin-bottom: 15px;
            font-weight: 900;
        }

        .image-overlay p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .banner-btn {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 30px;
            border: 1px solid white;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .banner-btn:hover {
            background: white;
            color: black;
        }

        .footer {
            background: #1c1c1c;
            color: white;
            padding: 80px 70px 35px;
            margin-top: 90px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 80px;
            max-width: 1200px;
            margin: auto;
        }

        .footer-col h2 {
            font-size: 34px;
            font-weight: 900;
            margin-bottom: 15px;
        }

        .footer-col h3 {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .footer-col p {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
            max-width: 380px;
        }

        .footer-col a {
            display: block;
            margin-bottom: 12px;
            text-decoration: underline;
            color: rgba(255, 255, 255, 0.85);
            font-size: 15px;
            transition: 0.25s;
        }

        .footer-col a:hover {
            color: #facc15;
        }

        .footer-newsletter {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .footer-newsletter input {
            flex: 1;
            padding: 14px 16px;
            border-radius: 6px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .footer-newsletter button {
            padding: 14px 22px;
            border-radius: 30px;
            border: 1px solid white;
            background: transparent;
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: 0.25s;
        }

        .footer-newsletter button:hover {
            background: white;
            color: black;
        }

        .footer-address {
            margin-top: 25px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.65);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 70px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
        }

        /* ===== PREMIUM NAVBAR ===== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 18px 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 999;
            transition: 0.3s ease;
        }

        /* Transparent Mode (Landing Hero) */
        .nav-transparent {
            background: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
        }

        /* Solid Mode (Catalogue + Detail) */
        .nav-solid {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #eee;
        }

        /* Brand */
        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 18px;
        }

        .brand img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .nav-transparent .brand span {
            color: white;
        }

        .nav-solid .brand span {
            color: black;
        }

        /* Links */
        .nav-links a {
            margin-left: 26px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: 0.25s;
        }

        .nav-transparent .nav-links a {
            color: rgba(255, 255, 255, 0.85);
        }

        .nav-solid .nav-links a {
            color: #111;
        }

        .nav-links a:hover {
            color: #facc15;
        }

        /* Button */
        .nav-btn {
            padding: 10px 22px;
            border-radius: 30px;
            border: 1px solid;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            transition: 0.25s;
        }

        .nav-transparent .nav-btn {
            border-color: white;
            color: white;
        }

        .nav-transparent .nav-btn:hover {
            background: white;
            color: black;
        }

        .nav-solid .nav-btn {
            border-color: black;
            color: black;
        }

        .nav-solid .nav-btn:hover {
            background: black;
            color: white;
        }
    </style>
</head>

<body>

    <header class="navbar @yield('navbar-style')">

        <div class="brand">
            <img src="/Logo.jpeg" alt="KainLokal Logo">
            <span>KainLokal</span>
        </div>

        <nav class="nav-links">
            <a href="/">Home</a>
            <a href="/catalogue">Catalogue</a>
            <a href="/voc">VoC</a>
        </nav>

        <div class="nav-action">
            
        </div>

    </header>


    @yield('content')

    <footer class="footer">

        <div class="footer-container">

            <div class="footer-col">
                <h3>Info</h3>
                <a href="/">Home</a>
                <a href="/catalogue">Catalogue</a>
                <a href="/voc">Voice of Customer</a>
            </div>

            <div class="footer-col">
                <h3>Contact Us</h3>

                <a href="https://shopee.co.id/kainlokal" target="_blank">Shopee</a>
                <a href="https://tokopedia.com/kainlokal" target="_blank">Tokopedia</a>
                <a href="https://api.whatsapp.com/send?phone=6281931227016" target="_blank">WhatsApp</a>
                <a href="https://www.instagram.com/kainlokal_id" target="_blank">Instagram</a>

            </div>

            <div class="footer-col">
                <div class="footer-address">
                    <p><b>KainLokal Indonesia</b></p>
                    <p>Jl. Batik Ayu No. 16</p>
                    <p>Bandung, Indonesia</p>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            © {{ date('Y') }} KainLokal — Made with ❤️ Soleh Solehah
        </div>

    </footer>


</body>

</html>