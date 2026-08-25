@extends('layouts.app')

@section('title', 'Beranda - Mading SMK N 1 Dukuhturi')

@section('content')
    <header class="hero">
        <div class="slide active">
            <img
                src="image/ps.jpg"
                alt="Seni"
            />
            <div class="hero-content">
                <span class="badge">Featured</span>
                <h1>Pameran Seni Digital 2026</h1>
                <p>
                    Karya Fajar Tirta Hidayat memenangkan kompetisi
                    nasional.
                </p>
                <a href="{{ url('/berita') }}" class="btn-join"
                    >Baca Selengkapnya</a
                >
            </div>
        </div>
        <div class="slide">
            <img
                src="https://discover.therookies.co/content/images/size/w1000/2024/04/Almecija_Sophie_blender-project.jpeg"
                alt="3D"
            />
            <div class="hero-content">
                <span class="badge">Workshop</span>
                <h1>Belajar 3D Game Art</h1>
                <p>Pelatihan gratis Blender untuk pemula di Multimedia.</p>
                <a href="#" class="btn-join"
                    >Daftar Sekarang</a
                >
            </div>
        </div>
        <div class="dots">
            <div class="dot active"></div>
            <div class="dot"></div>
        </div>
    </header>

    <div class="container">
        <div class="section-title">
            <h2>Berita & Artikel</h2>
            <p>Informasi terbaru seputar kegiatan sekolah.</p>
        </div>
        <div class="grid-wrapper">
            <div style="display: flex; flex-direction: column; gap: 20px">
                <div class="card card-featured">
                    <img
                        src="https://image.idntimes.com/post/20241024/whatsapp-image-2022-10-27-at-094450-1-3a2c45a5e6c0870d54f79516592c0b15-eb3f99d37634cd2a45fee7589b356414.jpeg"
                        class="card-img-top"
                        style="height: 100%"
                    />
                    <div class="card-body">
                        <h3 class="card-title">
                            Anggota Baru Periode 2026/2027
                        </h3>
                        <p class="card-text">Selamat datang Member baru!</p>
                        <br />
                        <a href="{{ url('/berita') }}" class="btn-join"
                            >Baca Selengkapnya</a
                        >
                    </div>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 20px">
                <div class="card">
                    <img
                        src="https://i.pinimg.com/750x/cc/c8/74/ccc8746cf19d1a35de3019252f6b1fd7.jpg"
                        class="card-img-top"
                        style="height: 160px"
                    />
                    <div class="card-body">
                        <span class="card-meta">KEPALA SEKOLAH</span>
                        <h4 class="card-title">Pesan Minggu Ini</h4>
                        <p class="card-text">
                            "Jangan lupa bahwa hidup adalah seni."
                        </p>
                        <br />
                        <a href="{{ url('/berita') }}" class="btn-join"
                            >Baca Selengkapnya</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection