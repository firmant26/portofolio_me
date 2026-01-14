@extends('layout')

@section('title', 'Home')

@section('hero')
    <div class="hero">
        <div class="profile-container">
            <img src="{{ asset('assets/profile.jpg') }}" alt="Foto Firman Triswanda" class="profile-img">
        </div>
        <h1>Halo, Saya Firman Triswanda</h1>
        <p>Mahasiswa Teknologi Rekayasa Perangkat Lunak</p>
    </div>
@endsection

@section('content')
    <section class="text-justify">
        <h2>Selamat Datang</h2>
        <p>Halo teman-teman!, Saya <strong>Moch Firman Triswanda</strong>, mahasiswa program studi Teknologi Rekayasa Perangkat Lunak (TRPL) di Politeknik Negeri Banyuwangi. Memiliki latar belakang pendidikan PPLG dari SMK Negeri 1 Banyuwangi, saya telah membangun minat dan kemampuan dalam menganalisis serta merancang sistem digital.</p>

        <p>Selain fokus di bidang akademik, saya memiliki rekam jejak organisasi yang kuat. Selama di SMK, saya dipercaya sebagai Ketua Sie Inventaris UKS/PMR Wijaya Husada (2020-2023) dan telah menyelesaikan program magang di Kantor Kecamatan Kalipuro (2023). Pengalaman ini membentuk karakter saya menjadi pribadi yang teliti, pekerja keras, dan adaptif terhadap teknologi baru.</p>

        <p>Di bangku perkuliahan, saya aktif berkontribusi dalam organisasi kampus:
            <ul>
                <li><strong>UKM Kewirausahaan:</strong> Menjabat sebagai Administrasi Divisi Jasa (2024-2025) dan saat ini aktif sebagai bagian dari Tim JNT (2025-Sekarang).</li>
                <li><strong>UKM KSR (Korps Sukarela):</strong> Memulai sebagai Anggota Departemen Logistik (2024-2025) dan kini mengemban amanah sebagai Humas Internal (2025-Sekarang).</li>
            </ul>
        </p>
        <p>Ini adalah portfolio berbasis <strong>Laravel</strong> yang saya kembangkan untuk menampilkan perjalanan karir saya di dunia Software Engineering.</p>
    </section>
@endsection
