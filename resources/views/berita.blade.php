@extends('layouts.app')

@section('title', 'Berita - Mading')

@push('styles')
    <style>
        .card { 
            cursor: pointer; 
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
            background: #1e1e1e; 
            border-radius: 12px; 
            overflow: hidden; 
            border: 1px solid #333;
            display: flex;
            flex-direction: column;
        }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5); }
        .card-img-top { width: 100%; height: 200px; object-fit: cover; }
        .card-body { padding: 15px; flex-grow: 1; }
        .card-title { font-size: 1.2rem; color: #fff; margin-bottom: 8px; font-weight: bold; }
        .card-text { font-size: 0.9rem; color: #aaa; line-height: 1.5; }

        .news-modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.85); backdrop-filter: blur(5px); z-index: 9999; display: none; justify-content: center; align-items: center; padding: 20px; opacity: 0; transition: opacity 0.3s ease; }
        .news-modal-content { background: #1e1e1e; border: 1px solid #333; width: 100%; max-width: 700px; border-radius: 12px; overflow: hidden; position: relative; transform: scale(0.8); transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7); }
        .news-modal-img { width: 100%; height: 300px; object-fit: cover; border-bottom: 2px solid #0d6efd; }
        .news-modal-body { padding: 25px; text-align: left; color: #e0e0e0; }
        .news-modal-title { margin-top: 0; margin-bottom: 10px; font-size: 1.5rem; color: #fff; font-weight: 700; }
        .news-modal-text { font-size: 1rem; line-height: 1.6; color: #ccc; white-space: pre-line; }
        .close-modal-btn { position: absolute; top: 15px; right: 15px; background: rgba(0, 0, 0, 0.6); color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 1.2rem; transition: 0.2s; border: none; }
        .close-modal-btn:hover { background: #ff4d4d; transform: rotate(90deg); }
        .news-modal-overlay.active { display: flex; opacity: 1; }
        .news-modal-overlay.active .news-modal-content { transform: scale(1); }
        body.modal-open { overflow: hidden; }
    </style>
@endpush

@section('content')
    <div class="ambient-bg">
        <div class="light-blob-1"></div>
        <div class="light-blob-2"></div>
    </div>

    <div class="container">
        <div class="page-header" style="margin-bottom: 25px;">
            <h1>Berita Sekolah</h1>
            <p>Update terbaru kegiatan siswa.</p>
        </div>

        <div class="grid-wrapper">
            @forelse ($beritas as $berita)
                <div class="card" onclick="openModal(this)">
                    <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : 'https://via.placeholder.com/600x300?text=No+Image' }}" class="card-img-top" alt="{{ $berita->judul }}" />
                    
                    <div class="card-body">
                        <h3 class="card-title">{{ $berita->judul }}</h3>
                        <p class="card-text">{{ Str::limit($berita->deskripsi, 120) }}</p>
                        <span class="full-desc" style="display: none;">{{ $berita->deskripsi }}</span>
                    </div>
                </div>
            @empty
                <p style="color: #aaa; text-align: center; grid-column: 1 / -1;">Belum ada berita yang diterbitkan.</p>
            @endforelse
        </div>
    </div>

    <!-- UI Modal Pop-up Berita -->
    <div id="newsModal" class="news-modal-overlay" onclick="closeModalOnOutside(event)">
        <div class="news-modal-content">
            <button class="close-modal-btn" onclick="closeModal()">
                &times;
            </button>
            <img id="modalImg" src="" alt="Preview" class="news-modal-img" />
            <div class="news-modal-body">
                <h3 id="modalTitle" class="news-modal-title">Judul Berita</h3>
                <p id="modalDesc" class="news-modal-text">Isi berita...</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const modal = document.getElementById("newsModal");
        const modalImg = document.getElementById("modalImg");
        const modalTitle = document.getElementById("modalTitle");
        const modalDesc = document.getElementById("modalDesc");
        const body = document.body;

        function openModal(cardElement) {
            const imgSrc = cardElement.querySelector(".card-img-top").src;
            const titleText = cardElement.querySelector(".card-title").innerText;
            const descText = cardElement.querySelector(".full-desc").innerText;

            modalImg.src = imgSrc;
            modalTitle.innerText = titleText;
            modalDesc.innerText = descText;

            modal.style.display = "flex";
            setTimeout(() => {
                modal.classList.add("active");
            }, 10);

            body.classList.add("modal-open");
        }

        function closeModal() {
            modal.classList.remove("active");
            setTimeout(() => {
                modal.style.display = "none";
                body.classList.remove("modal-open");
            }, 300);
        }

        function closeModalOnOutside(event) {
            if (event.target === modal) {
                closeModal();
            }
        }

        document.addEventListener("keydown", function (event) {
            if (event.key === "Escape") {
                closeModal();
            }
        });
    </script>
@endpush