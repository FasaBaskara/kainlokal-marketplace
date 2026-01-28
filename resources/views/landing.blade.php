@extends('layout')

@section('navbar-style', 'nav-transparent')

@section('content')

<div class="hero" style="background-image: url('/hero.png');">

    <div class="hero-content">
        <h1>KainLokal</h1>

        <p>
            Marketplace kain nusantara dengan desain modern dan tradisional.
            Temukan koleksi terbaik untuk gaya elegan Anda.
        </p>

        <div class="hero-buttons">
            <a href="/catalogue" class="btn-primary">Explore Catalogue</a>
            <a href="/voc" class="btn-secondary">Voice of Customer</a>
        </div>
    </div>

    <div class="scroll-indicator">
        Scroll Down
        <span>⌄</span>
    </div>

</div>

<div class="section">
    <div class="card">
        <h2>✨ Kenapa Memilih KainLokal?</h2>
        <p>
            Kami menghadirkan kain premium dengan motif khas nusantara yang modern,
            mendukung UMKM lokal, dan menjaga budaya Indonesia tetap hidup.
        </p>
    </div>
</div>

@endsection
