@extends('layout')

@section('navbar-style', 'nav-solid')

@section('content')

<div class="section">

    <div class="section-heading">
        🗣 <span>Voice of Customer</span>
    </div>

    <p style="font-size: 16px; max-width: 720px; line-height: 1.7; color: #444; margin-top: 15px;">
        Kami percaya produk terbaik lahir dari masukan pelanggan.
        Bantulah kami mengembangkan batik KainLokal menjadi lebih modern, nyaman,
        dan sesuai kebutuhan Anda.
    </p>

    <div class="voc-card">
        <h2>✨ Berikan Feedback Anda</h2>
        <p>
            Isi form singkat berikut untuk membantu kami meningkatkan kualitas motif,
            layanan, dan pengalaman belanja.
        </p>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfvHc3bvbn26IxOty0w00a33zeiD8nxg7X_ueQBoFLsyUz7Ww/viewform?usp=dialog"
           target="_blank"
           class="btn-primary">
            Isi Feedback Sekarang →
        </a>
    </div>

    <div style="margin-top:50px;" class="card">
        <h3 style="margin-top:0;">📌 Feedback Anda akan digunakan untuk:</h3>

        <ul style="line-height: 1.8; color:#444;">
            <li>Meningkatkan kualitas produk dan pelayanan</li>
            <li>Mengembangkan motif batik sesuai tren pelanggan</li>
            <li>Memberikan pengalaman belanja yang lebih nyaman</li>
        </ul>
    </div>

</div>

@endsection
