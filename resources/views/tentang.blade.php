@extends('layouts.app')

@section('title', 'Tentang Kami - Mading SMK N 1 Dukuhturi')

@push('styles')
    <style>
        body { background-image: none !important; background-color: #121212 !important; font-family: "Poppins", sans-serif; opacity: 1 !important; transform: none !important; }
        .intro-section { background: linear-gradient(145deg, rgba(30, 30, 30, 0.8), rgba(20, 20, 20, 0.9)); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 16px; padding: 40px; margin-bottom: 40px; position: relative; overflow: hidden; }
        .intro-section::before { content: ""; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--primary); }
        .vm-grid { display: grid; grid-template-columns: 1fr 1.5fr; gap: 25px; margin-bottom: 60px; }
        .vm-card { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 16px; padding: 30px; height: 100%; transition: 0.3s; }
        .vm-card:hover { background: rgba(255, 255, 255, 0.06); border-color: rgba(255, 255, 255, 0.2); transform: translateY(-5px); }
        .vm-title { color: var(--primary); font-size: 1.5rem; font-weight: 700; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; text-transform: uppercase; letter-spacing: 1px; }
        .misi-list { list-style: none; padding: 0; }
        .misi-list li { position: relative; padding-left: 25px; margin-bottom: 12px; color: #ccc; }
        .misi-list li::before { content: "\f00c"; font-family: "Font Awesome 6 Free"; font-weight: 900; position: absolute; left: 0; top: 2px; color: var(--primary); }
        .org-container { position: relative; padding-top: 20px; }
        .org-level { display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; margin-bottom: 50px; position: relative; z-index: 2; }
        .profile-card { background: #1a1a1a; border: 1px solid #333; border-radius: 12px; padding: 20px; width: 220px; text-align: center; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); transition: 0.3s; }
        .profile-card:hover { transform: translateY(-5px); border-color: var(--primary); box-shadow: 0 0 20px rgba(41, 151, 255, 0.2); }
        .profile-img { display: block; margin-left: auto; margin-right: auto; border-radius: 50%; border: 2px solid var(--primary); object-fit: cover; margin-bottom: 15px; background: #000; }
        .p-name { color: white; font-weight: 700; font-size: 1rem; margin-bottom: 5px; }
        .p-role { color: #888; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.5px; }
        @media (max-width: 768px) { .vm-grid { grid-template-columns: 1fr; } .org-level { gap: 20px; } .profile-card { width: 100%; max-width: 250px; margin-bottom: 15px; } }
    </style>
@endpush

@section('content')
    <div class="ambient-bg">
        <div class="light-blob-1"></div>
        <div class="light-blob-2"></div>
    </div>

    <div class="container" style="padding-bottom: 80px">
        <div class="page-header">
            <h1>Tentang Mading</h1>
            <p>Kreativitas Tanpa Batas, Literasi Berkualitas.</p>
        </div>

        <div class="intro-section">
            <h2 style="color: white; margin-bottom: 15px">
                <i class="fa-solid fa-clock-rotate-left"></i> Sejarah Singkat
            </h2>
            <p style="color: #ccc; line-height: 1.8">
                Ekstrakurikuler Mading (Smezine) SMK N 1 Dukuhturi didirikan pada tahun 2010. Awalnya, kami hanya berfokus pada majalah dinding tempel konvensional yang terbit setiap bulan.
                <br /><br />
                Seiring perkembangan teknologi, pada tahun 2020 kami mulai merambah ke dunia digital dengan mengembangkan <strong>Mading 3D, E-Magazine, dan Jurnalistik Website</strong>. Kini, Smezine menjadi wadah utama bagi siswa untuk menyalurkan bakat di bidang desain grafis, fotografi, videografi, dan kepenulisan.
            </p>
        </div>

        <div class="vm-grid">
            <div class="vm-card">
                <div class="vm-title"><i class="fa-solid fa-eye"></i> Visi</div>
                <p style="font-size: 1.1rem; color: white; line-height: 1.6; font-style: italic;">
                    "Mewujudkan generasi muda yang kritis, kreatif, dan inovatif melalui budaya literasi serta penguasaan teknologi media digital."
                </p>
            </div>
            <div class="vm-card">
                <div class="vm-title"><i class="fa-solid fa-list-check"></i> Misi</div>
                <ul class="misi-list">
                    <li>Mengembangkan kemampuan jurnalistik dan reportase siswa.</li>
                    <li>Meningkatkan skill desain grafis dan multimedia anggota.</li>
                    <li>Menyajikan informasi sekolah yang akurat dan menarik.</li>
                    <li>Berpartisipasi aktif dalam kompetisi mading tingkat daerah & nasional.</li>
                </ul>
            </div>
        </div>

        <div class="section-title text-center" style="margin-bottom: 40px; text-align: center">
            <h2 style="color: white">Struktur Organisasi</h2>
            <p style="color: var(--primary)">Periode 2025/2026</p>
        </div>

        <!-- Struktur Organisasi List -->
        <div class="org-container">
            <div class="org-level">
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Ketua+Umum&background=2997ff&color=fff&size=128" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role" style="color: var(--primary)">Ketua Umum</div>
                </div>
            </div>

            <div class="org-level">
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Ketua+1&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Ketua 1</div>
                </div>
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Ketua+2&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Ketua 2</div>
                </div>
            </div>

            <div class="org-level">
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Sekre+1&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Sekretaris 1</div>
                </div>
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Sekre+2&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Sekretaris 2</div>
                </div>
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Bendahara+1&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Bendahara 1</div>
                </div>
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=Bendahara+2&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Bendahara 2</div>
                </div>
            </div>

            <h4 style="text-align: center; color: #aaa; margin-bottom: 20px">DIVISI PDD</h4>
            <div class="org-level">
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=PDD+1&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Koord. PDD</div>
                </div>
                <div class="profile-card">
                    <img src="https://ui-avatars.com/api/?name=PDD+2&background=333&color=fff" alt="Foto" class="profile-img" />
                    <div class="p-name">Nama Siswa</div>
                    <div class="p-role">Anggota PDD</div>
                </div>
            </div>
        </div>
    </div>
@endsection