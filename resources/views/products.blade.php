@extends('layout')

@section('title', 'Products')

@section('content')
<section>
    <h2>Produk Saya</h2>

    <div class="product-grid">
        <a href="https://firmantriswanda.my.id/perpustakaan"
           class="product-card">
            <img src="{{ asset('assets/profile.jpg') }}">
            <h3>Gantungan Kunci Akrilik</h3>
            <p class="price">Rp 5.000</p>
        </a>

        <a href="https://firmantriswanda.my.id/laundry"
           class="product-card">
            <img src="{{ asset('assets/profile.jpg') }}">
            <h3>Gantungan Kunci Akrilik Beruang</h3>
            <p class="price">Rp 5.000</p>
        </a>

        <a href="https://play.google.com/store/apps/details?id=manajemen.gudang"
           class="product-card">
            <img src="{{ asset('assets/profile.jpg') }}">
            <h3>Gantungan Kunci Akrilik Custom</h3>
            <p class="price">Rp 8.000</p>
        </a>
    </div>

    <div class="product-grid">
        <a href="https://lynk.id/vreetie/o73gg0mje3wk"
           class="product-card">
            <img src="{{ asset('assets/poster_infografis_1.jpg') }}">
            <h3>Template Poster Infografis 1</h3>
            <p class="price">Rp 30.000</p>
        </a>

        <a href="#"
           class="product-card">
            <img src="{{ asset('assets/poster_infografis_1.jpg') }}">
            <h3>Template Poster Infografis 2</h3>
            <p class="price">Rp 35.000</p>
        </a>

        <a href="https://lynk.id/vreetie/w3m53e517nwz"
           class="product-card">
            <img src="{{ asset('assets/cover_buku.jpg') }}">
            <h3>Desain Lucu Buku Lipat A4</h3>
            <p class="price">Rp 15.000</p>
        </a>
    </div>
</section>
@endsection
