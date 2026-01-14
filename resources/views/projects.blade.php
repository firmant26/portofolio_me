@extends('layout')

@section('title', 'Projects')

@section('content')
    <section>
        <h2>Project Saya</h2>
        <div class="project-grid">
            <div class="project-card">
                <h3>Sistem Perpustakaan</h3>
                <p>Tech Stack: PHP & MySQL</p>
            </div>
            <div class="project-card">
                <h3>Sistem Laundry</h3>
                <p>Optimasi Database untuk manajemen transaksi laundry.</p>
            </div>
            <div class="project-card">
                <h3>Manajemen Gudang</h3>
                <p>Aplikasi mobile menggunakan Dart/Flutter.</p>
            </div>
        </div>
    </section>
@endsection
