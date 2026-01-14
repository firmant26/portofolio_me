@extends('layout')

@section('title', 'About Me')

@section('content')
<section class="text-justify">
    <h2>Tentang Saya</h2>
    <p>
        Saya <strong>Moch Firman Triswanda</strong>, seorang mahasiswa Teknologi Rekayasa Perangkat Lunak di Politeknik Negeri Banyuwangi.
        Memiliki latar belakang pendidikan PPLG dari SMK Negeri 1 Banyuwangi, saya telah membangun fondasi yang kuat dalam analisis sistem dan perancangan digital.
        Saya dikenal sebagai pribadi yang pekerja keras, teliti, dan selalu antusias untuk mendalami teknologi terbaru, khususnya di bidang <strong>Backend & Database</strong>.
    </p>

    <hr style="border: 0; height: 1px; background: #eee; margin: 30px 0;">

    <div class="about-grid">
        <div class="about-column">
            <h3><i class="icon">🎓</i> Pendidikan</h3>
            <ul>
                <li>
                    <strong>Politeknik Negeri Banyuwangi</strong><br>
                    <span>D4 Teknologi Rekayasa Perangkat Lunak (Sekarang)</span>
                </li>
                <li>
                    <strong>SMK Negeri 1 Banyuwangi</strong><br>
                    <span>Pengembangan Perangkat Lunak dan Gim (2020 - 2023)</span>
                </li>
            </ul>
        </div>

        <div class="about-column">
            <h3><i class="icon">🚀</i> Pengalaman & Organisasi</h3>
            <ul>
                <li><strong>SMK:</strong>
                    <ul>
                        <li>Ketua Sie Inventaris UKS/PMR (2020 - 2023)</li>
                        <li><strong>Magang:</strong> Kantor Kecamatan Kalipuro (Juli - Des 2023)</li>
                    </ul>
                <li><strong>UKM Kewirausahaan:</strong>
                    <ul>
                        <li>Tim JNT (Juli 2025 - Sekarang)</li>
                        <li>Administrasi Divisi Jasa (2024 - 2025)</li>
                    </ul>
                </li>
                <li><strong>UKM KSR (Korps Sukarela):</strong>
                    <ul>
                        <li>Humas Internal (Juli 2025 - Sekarang)</li>
                        <li>Anggota Departemen Logistik (2024 - 2025)</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<section>
    <h3>Minat & Keahlian</h3>
    <div class="skills-tags">
        <span class="tag">Backend Development</span>
        <span class="tag">Database Management</span>
        <span class="tag">System Analysis</span>
        <span class="tag">Laravel</span>
        <span class="tag">PHP</span>
        <span class="tag">Dart</span>
    </div>
</section>
@endsection
