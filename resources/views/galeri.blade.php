@extends('layouts.app')

@section('title', 'Galeri Smezine - Dark Mode')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    
    <style>
        body {
            background-image: none !important;
            background-color: #121212 !important;
            font-family: "Poppins", sans-serif;
            opacity: 1 !important;
            transform: none !important;
        }
        .page-header h1 {
            color: #ffffff;
            font-weight: 700;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }
        .page-header p {
            color: #a0a0a0;
        }
        .masonry {
            column-count: 4;
            column-gap: 20px;
        }
        @media (max-width: 992px) { .masonry { column-count: 3; } }
        @media (max-width: 768px) { .masonry { column-count: 2; } }
        @media (max-width: 576px) { .masonry { column-count: 1; } }
        .masonry-item { break-inside: avoid; margin-bottom: 20px; }
        .gallery-card {
            position: relative; border-radius: 12px; overflow: hidden;
            background-color: #1e1e1e; border: 1px solid #333;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }
        .gallery-card:hover { transform: translateY(-5px); box-shadow: 0 12px 25px rgba(0, 0, 0, 0.6); border-color: #0d6efd; }
        .gallery-card img { width: 100%; display: block; filter: brightness(0.9); transition: transform 0.5s ease, filter 0.3s ease; }
        .gallery-card:hover img { transform: scale(1.05); filter: brightness(1); }
        .gallery-card::after {
            content: ""; position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.6) 40%, transparent 100%); z-index: 1; pointer-events: none;
        }
        .gallery-text { position: absolute; bottom: 20px; left: 20px; right: 20px; z-index: 2; text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8); }
        .gallery-text h5 { margin: 0; font-size: 1.1rem; font-weight: 600; color: #fff; }
        .gallery-text p { margin-top: 5px; font-size: 0.85rem; color: #cccccc; opacity: 0.9; line-height: 1.4; }
        a { text-decoration: none; }
        .f-slide { padding: 0 !important; margin: 0 !important; }
        .fancybox__content { height: 100% !important; width: 100% !important; display: flex; align-items: center; justify-content: center; }
        .fancybox__image { max-width: 50% !important; max-height: 2% !important; object-fit: contain !important; padding: 0 !important; }
        .f-toolbar { position: absolute; top: 0; left: 0; right: 0; z-index: 20; background: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 0%, transparent 100%) !important; border: none; }
        .f-caption { position: absolute !important; bottom: 0 !important; left: 0 !important; right: 0 !important; z-index: 20; background: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, transparent 100%) !important; padding-bottom: 20px; text-align: center; }
        body.fancybox-active { overflow: hidden !important; }
    </style>
@endpush

@section('content')
    <div class="container py-5">
        <div class="page-header text-center mb-5">
            <h1 class="mb-3">Galeri Smezine</h1>
            <p class="lead">
                Kumpulan karya dan dokumentasi kegiatan ekstrakurikuler mading
            </p>
        </div>
            <div id="gallery" class="masonry"></div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        const photos = [
            { src: "{{ asset('image/karya1.jpg') }}", title: "Karya DMIYS", desc: "Deskripsi singkat karya 1" },
            { src: "{{ asset('image/karya2.jpg') }}", title: "Karya DMIYS", desc: "Juara 2 kategori tradisional" },
            { src: "{{ asset('image/larutrutin.jpg') }}", title: "Larut Rutin Mading", desc: "Momen kebersamaan setiap hari Rabu" },
            { src: "{{ asset('image/dmiys2025.jpg') }}", title: "Poster DMIYS 2025", desc: "Potret poster dengan maskot Mezzie" },
            { src: "{{ asset('image/pelman2025.jpg') }}", title: "Pelantikan Mandiri", desc: "Pelantikan 2026 berlangsung meriah" },
            { src: "{{ asset('image/pemenangminigames.jpg') }}", title: "Pemenang Mini Games", desc: "Foto pemenang kelompok 1-6" },
            { src: "{{ asset('image/phmading.jpg') }}", title: "PH Mading", desc: "Foto pengurus harian setelah acara Pelman" },
            { src: "{{ asset('image/dtiys.jpg') }}", title: "DTIYS 2024", desc: "Hasil karya partisipasi anggota tahun 2024" },
            { src: "{{ asset('image/pemenangdmiys.jpg') }}", title: "Pemenang DMIYS 2025", desc: "Seluruh pemenang kategori tradisional & digital" },
        ];

        const gallery = document.getElementById("gallery");
        photos.forEach((p) => {
            const title = p.title || "Tanpa Judul";
            const desc = p.desc || "";
            gallery.innerHTML += `
            <div class="masonry-item">
                <a href="${p.src}" data-fancybox="gallery" data-caption="<h4>${title}</h4><p>${desc}</p>">
                    <div class="gallery-card">
                        <img src="${p.src}" alt="${title}" loading="lazy">
                        <div class="gallery-text">
                            <h5>${title}</h5>
                            <p>${desc}</p>
                        </div>
                    </div>
                </a>
            </div>`;
        });

        Fancybox.bind("[data-fancybox]", {
            Images: { fit: "contain", zoom: true },
            Panzoom: { maxScale: 2 },
            Thumbs: false,
            Toolbar: { display: { left: [], middle: [], right: ["close"] } },
            showClass: "f-fadeSlowIn",
            hideClass: "f-fadeSlowOut",
        });
    </script>
@endpush