@extends('layout')

@section('navbar-style', 'nav-transparent')

@section('content')

<section class="hero-modern"
    style="background-image: url('products/hero.png');">

    <!-- INI BISA DIUBAH BUAT DI LANDING PAGE AWAL -->
    <div class="hero-text">
        <h1>Elegansi Kain Nusantara</h1>

        <p>
            Temukan koleksi terbaik untuk gaya elegan Anda.
        </p>

        <div class="hero-buttons">
            <a href="/catalogue" class="hero-btn">Shop Now</a>
            <a href="/voc" class="hero-btn-outline">Voice of Customer</a>
        </div>
    </div>
</section>


<section class="section">

    <div class="about-card">
        <h2>Kenapa Memilih KainLokal?</h2>
        <p>
            Kami menghadirkan <strong>kain premium</strong> dengan motif khas nusantara yang modern,
            mendukung <strong>UMKM lokal</strong>, dan menjaga budaya Indonesia tetap hidup.
        </p>
    </div>

</section>


<section class="image-banner"
    style="background-image: url('products/about.jpg');">

    <!-- GANTI INI BANG -->
    <div class="image-overlay">
        <h2>ABOUT KainLokal</h2>
        <p>
            Kami hadir dengan satu misi:
            membawa kain nusantara menjadi bagian dari gaya hidup modern.
        </p>

        <a href="/catalogue" class="banner-btn">
            Lihat Koleksi →
        </a>
    </div>

</section>

@endsection