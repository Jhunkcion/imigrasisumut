@extends('layouts.user')


@section('content')

<!-- Carousel -->
<div class="carousel-container">
    <div class="carousel" id="carousel">
        <div class="carousel-item active">
            <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="Slide 1">
            <div class="carousel-caption">
                <h2>Layanan Imigrasi Modern</h2>
                <p>Kami menghadirkan kemudahan layanan melalui sistem digital terbaru.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('user/images/image.png') }}" alt="Slide 2">
            <div class="carousel-caption">
                <h2>Antrean Online Praktis</h2>
                <p>Daftar layanan tanpa harus datang langsung ke kantor.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('user/images/hero-bg.jpg') }}" alt="Slide 3">
            <div class="carousel-caption">
                <h2>Peningkatan SDM Keimigrasian</h2>
                <p>Kami berkomitmen memberikan pelayanan terbaik melalui pelatihan berkelanjutan.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control prev" id="prev">
        <i class='bx bx-chevron-left'></i>
    </button>
    <button class="carousel-control next" id="next">
        <i class='bx bx-chevron-right'></i>
    </button>
</div>

<section id="layanan" class="layanan-section">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <p class="section-description">Pilih jenis layanan sesuai dengan kebutuhan Anda</p>

        <div class="layanan-group">
            <h3>Layanan untuk Warga Negara Indonesia</h3>
            <div class="layanan-cards">
                <a href="/layanan/paspor" class="layanan-card">
                    <i class='bx bx-id-card'></i>
                    <h4>Permohonan Paspor</h4>
                    <p>Layanan permohonan paspor baru dan perpanjangan.</p>
                </a>
                <a href="/layanan/antrean" class="layanan-card">
                    <i class='bx bx-calendar'></i>
                    <h4>Antrean Online</h4>
                    <p>Pendaftaran antrean pelayanan keimigrasian secara daring.</p>
                </a>
                <a href="/layanan/antrean" class="layanan-card">
                    <i class='bx bx-calendar'></i>
                    <h4>Antrean Online</h4>
                    <p>Pendaftaran antrean pelayanan keimigrasian secara daring.</p>
                </a>
                <a href="/layanan/antrean" class="layanan-card">
                    <i class='bx bx-calendar'></i>
                    <h4>Antrean Online</h4>
                    <p>Pendaftaran antrean pelayanan keimigrasian secara daring.</p>
                </a>
            </div>
        </div>

        <div class="layanan-group">
            <h3>Layanan untuk Warga Negara Asing</h3>
            <div class="layanan-cards">
                <a href="/layanan/visa" class="layanan-card">
                    <i class='bx bx-world'></i>
                    <h4>Permohonan Visa</h4>
                    <p>Layanan visa kunjungan, tinggal terbatas, dan lainnya.</p>
                </a>
                <a href="/layanan/izin-tinggal" class="layanan-card">
                    <i class='bx bx-home'></i>
                    <h4>Izin Tinggal</h4>
                    <p>Layanan perpanjangan dan perubahan izin tinggal.</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Unduhan -->
<section class="promo-section">
    <div class="promo-grid">

        <!-- M-Paspor Section -->
        <div class="promo-card">
            <div class="promo-text">
                <h2>Unduh Aplikasi M-Paspor Sekarang!</h2>
                <p>Ajukan permohonan paspor baru atau penggantian secara daring. Mudah dan nyaman.</p>
                <div class="store-container">
                <div class="store-buttons">
                    <a href="https://play.google.com/store/apps/details?id=id.go.imigrasi.paspor_online&pli=1" target="_blank">
                    <img src="{{ asset('user/images/gps.png') }}" alt="Google Play">
                    </a>
                    <a href="https://apps.apple.com/id/app/m-paspor/id1576336459" target="_blank">
                    <img src="{{ asset('user/images/aps.png') }}" alt="App Store">
                    </a>
                    </div>
                </div>
            </div>
            <div class="promo-image">
                <img src="{{ asset('user/images/image.png') }}" alt="M-Paspor">
            </div>
        </div>

        <!-- e-Visa Section -->
        <div class="promo-card reverse">
            <div class="promo-image">
                <img src="{{ asset('user/images/image.png') }}" alt="e-Visa" >
            </div>
            <div class="promo-text">
                <h2>Do You Want to Visit Indonesia?</h2>
                <p>Get an Indonesian visa quick and easy through <br><strong>evisa.imigrasi.go.id</strong></p>
                <a href="https://evisa.imigrasi.go.id/" target="_blank" class="apply-button">
                    <i class="fas fa-arrow-right"></i> APPLY NOW
                </a>
            </div>
        </div>

    </div>
</section>


<!-- ========================== Sosial Media Section =========================== -->
<section id="sosial-media" style="background-color:rgb(210, 210, 210); padding: 50px 0;">
    <div class="container-sosmed">

        <!-- Kartu Ikon Sosial Media -->
        <div class="social-media-cards">
            <h2 class="section-title">YUK FOLLOW JUGA <br>SOSIAL MEDIA KAMI</h2>
            <div class="social-links">
                <a href="https://instagram.com/kanimjaksel" target="_blank" class="social-link">
                    <i class="fab fa-instagram" style="color: #E4405F; font-size: 20px; margin-right: 5px;"></i>
                    Instagram
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-x-twitter" style="color: black; font-size: 20px; margin-right: 5px;"></i> Twitter
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-facebook-f" style="color: #3b5998; font-size: 20px; margin-right: 5px;"></i>
                    Facebook
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-tiktok" style="color: black; font-size: 20px; margin-right: 5px;"></i> TikTok
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-youtube" style="color: red; font-size: 20px; margin-right: 5px;"></i> YouTube
                </a>
            </div>
        </div>

        <!-- Instagram Reels Thumbnails -->
        <div class="instagram-reels"
            style="flex: 2; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            <!-- Reel Thumbnail 1 -->
            <a href="https://www.instagram.com/reel/DJJrkAMRClF/" target="_blank" class="reel-thumb-container">
                <img src="{{ asset('user/images/tb1.jpg') }}" class="reel-thumb" alt="Reel 1">
                <div class="play-icon"><i class="fas fa-play"></i></div>
            </a>
            <!-- Reel Thumbnail 2 -->
            <a href="https://www.instagram.com/reel/DIafvSxR983/" target="_blank" class="reel-thumb-container">
                <img src="{{ asset('user/images/tb2.jpg') }}" class="reel-thumb" alt="Reel 2">
                <div class="play-icon"><i class="fas fa-play"></i></div>
            </a>
            <!-- Reel Thumbnail 3 -->
            <a href="https://www.instagram.com/reel/DI-2m0wR98B/" target="_blank" class="reel-thumb-container">
                <img src="{{ asset('user/images/tb3.jpg') }}" class="reel-thumb" alt="Reel 3">
                <div class="play-icon"><i class="fas fa-play"></i></div>
            </a>
        </div>
    </div>
</section>

<!-- video profile -->
<section class="video-profil-section py-5 text-center bg-light">
    <div class="container">
        <h2 class="fw-bold mb-3">Video Profil</h2>
        <p class="text-muted subtitle">Kantor Imigrasi Kota Medan</p>

        <div class="video-container mt-4">
            <iframe src="https://www.youtube.com/embed/QKrWDxG47OM&t=83s frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

@if(isset($about[0]))
<section id="tentang-kami" class="tentang-kami-section">
    <div class="container">
        <div class="tentang-kami-content">
            <div class="tentang-kami-text">
                <h2>Tentang Kami</h2>
                <p>{!! $about[0]->caption !!}</p>
            </div>
            <div class="tentang-kami-image">
                <img src="{{ asset('about_image/' . $about[0]->image) }}" alt="Tentang Kami">
            </div>
        </div>
    </div>
</section>
@endif

<!--- Berita --->
<section id="berita" class="berita-section wow fadeIn">
    <div class="container">
        <h3 class="berita-title">Berita Terbaru</h3>
        <div class="berita-card-container" style="display: flex; flex-wrap: wrap; gap: 24px;">
            @foreach ($beritas as $berita)
            <div class="berita-card"
                style="flex: 1 1 300px; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1); background-color: #fff;">
                <img src="{{ asset('berita_image/' . $berita->image) }}" alt="{{ $berita->name }}"
                    style="width: 100%; height: 180px; object-fit: cover;">
                <div class="berita-content" style="padding: 16px;">
                    <h4 style="margin: 0 0 10px 0;">{{ $berita->name }}</h4>
                    <p style="color: #666; font-size: 14px;">{{ Str::limit($berita->description, 100, '...') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="pengumuman" class="pengumuman-section">
    <div class="container">
        <h2 class="section-title">Pengumuman</h2>
        <div class="pengumuman-grid">
            @foreach($notices as $notice)
            <a href="/destination" class="pengumuman-card">
                <h3 class="card-title">{{ $notice->name }}</h3>
                <p class="card-date">{{ \Carbon\Carbon::parse($notice->created_at)->format('d M Y') }}</p>
                <span class="card-link">Selengkapnya →</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
@endsection
