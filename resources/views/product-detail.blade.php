@extends('layout')

@section('navbar-style', 'nav-solid')

@section('content')

<div class="section detail-shopify">

    <div class="detail-grid">

        <div class="detail-gallery">

            <div class="main-image">
                <img src="{{ asset($product->image ?? 'products/default.jpg') }}"
                    alt="{{ $product->name }}">
            </div>

            <!-- ini belom di update masih sama semua -->
            <div class="thumbs">
                <img src="{{ asset($product->image ?? 'products/default.jpg') }}">
                <img src="{{ asset($product->image ?? 'products/default.jpg') }}">
                <img src="{{ asset($product->image ?? 'products/default.jpg') }}">
            </div>

        </div>

        <div class="detail-info">

            <h1>{{ $product->name }}</h1>

            <p class="price">
                Rp{{ number_format($product->price) }}
            </p>

            <p class="stock">
                Stock tersedia: <b>{{ $product->stock }}</b>
            </p>

            <!-- ini ganti ke no wa toko -->
            @if($product->stock > 0)
            <a
                href="https://wa.me/628889368705?text=Halo%20KainLokal!%20Saya%20mau%20pesan%20produk%20{{ urlencode($product->name) }}%20dengan%20harga%20Rp{{ number_format($product->price) }}."
                target="_blank"
                target="_blank"
                class="btn-buy">
                BUY IT NOW via WhatsApp
            </a>
            @else
            <div class="btn-disabled">
                Sold Out
            </div>
            @endif


            <div class="accordion">

                <details open>
                    <summary>DESCRIPTION</summary>
                    <p>
                        {{ $product->description }}
                    </p>
                </details>

                <!-- INI MASIH SAMA SEMUA -->
                <details>
                    <summary>DETAILS</summary>
                    <p>
                        Detail Produk:

                        * Material: Linen rami dan katun batik cap/sablon

                        * Aksen: Tali Makrame

                        * Ukuran: All Size

                        * Panjang Baju: 59cm

                        * Lingkar Dada: up to 136cm



                        Cara perawatan:

                        - cuci dengan tangan

                        - gunakan deterjen yang lembut dan air dingin

                        - jangan menggunakan pemutih

                        - setrika dengan suhu rendah untuk menjaga kualitas kain



                        Catatan:

                        - warna mungkin sedikit berbeda karena faktor kamera/layar device/cahaya

                        - toleransi jahitan 1-2cm



                        Yuk, tambahkan sentuhan etnik modern pada koleksi fashion Anda! Segera miliki Outer ini sekarang juga!
                    </p>
                </details>

                <!-- ini bisa ganti jadi apa aja -->
                <details>
                    <summary>SHIPPING</summary>
                    <p>
                        Pengiriman seluruh Indonesia (JNE / J&T / SiCepat).
                    </p>
                </details>

            </div>

            <div style="margin-top:70px;">

                <h2 style="font-size:22px; font-weight:800; margin-bottom:20px;">
                    You may also like...
                </h2>

                <div class="related-grid">

                    @foreach($relatedProducts as $item)

                    <a href="/product/{{ $item->id }}" class="product-link">
                        <div class="related-card">

                            @if($item->stock == 0)
                            <div class="sold-badge">Sold Out</div>
                            @endif

                            <div class="related-img">
                                <img src="{{ asset($item->image ?? 'products/default.jpg') }}" alt="{{ $item->name }}">
                            </div>

                            <h4>{{ $item->name }}</h4>
                            <p>Rp{{ number_format($item->price) }}</p>

                        </div>
                    </a>

                    @endforeach

                </div>

            </div>


        </div>

    </div>

</div>

@endsection