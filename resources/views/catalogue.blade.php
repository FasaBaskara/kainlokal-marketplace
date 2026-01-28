@extends('layout')

@section('navbar-style', 'nav-solid')

@section('content')

<div class="section">

    <div class="catalogue-top">
        <h1>Catalogue Batik KainLokal</h1>
        <p>Temukan koleksi batik premium pilihan terbaik untuk gaya formal maupun kasual.</p>
    </div>

    <div class="catalogue-bar">

        <form method="GET" action="/catalogue" class="search-box">

            <input type="hidden" name="sort" value="{{ $sort }}">

            <input
                type="text"
                name="search"
                placeholder="Search..."
                value="{{ $search }}">

            <button type="submit">Search</button>

        </form>

        <div class="sort">
            <form method="GET" action="/catalogue">
                <select name="sort" onchange="this.form.submit()">

                    <option value="">Sort by: Default</option>

                    <option value="newest" {{ $sort=="newest" ? "selected" : "" }}>
                        Newest
                    </option>

                    <option value="price_low" {{ $sort=="price_low" ? "selected" : "" }}>
                        Price Low → High
                    </option>

                    <option value="price_high" {{ $sort=="price_high" ? "selected" : "" }}>
                        Price High → Low
                    </option>

                    <option value="stock" {{ $sort=="stock" ? "selected" : "" }}>
                        Stock Available
                    </option>

                </select>
            </form>

        </div>

    </div>

    <div class="shop-grid">

        @foreach($products as $item)

        @if($products->count() == 0)
        <p style="text-align:center; margin-top:40px; color:#666;">
            Produk tidak ditemukan.
        </p>
        @endif


        <a href="/product/{{ $item->id }}" class="shop-card">

            @if($item->stock == 0)
            <div class="badge sold">Sold Out</div>
            @endif

            <div class="shop-img">
                <img src="{{ asset($item->image ?? 'products/default.jpg') }}" alt="{{ $item->name }}">
            </div>

            <div class="shop-info">

                <h3>{{ $item->name }}</h3>

                <p class="price">
                    Rp{{ number_format($item->price) }}
                </p>

                <!-- dummy rating ini -->
                <div class="stars">
                    ⭐⭐⭐⭐⭐ <span>(5.0)</span>
                </div>

            </div>

        </a>

        @endforeach

    </div>

</div>

@endsection