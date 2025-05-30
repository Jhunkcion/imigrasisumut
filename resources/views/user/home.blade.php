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
      <img src="{{ asset('user/images/imigrasi.png') }}" alt="Slide 2">
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

<section class="section-info">
  <div class="info-container">
    <div class="info-text">
      <p>Kantor Imigrasi Kelas I Khusus TPI Medan</p>
      <h2>Informasi Keimigrasian</h2>
      <p>Kami selalu siap membantu anda menemukan Informasi seputar keimigrasian.</p>
    </div>
    <div class="info-links">
      <a href="{{ route('services.all_service', ['category' => 'WNI']) }}" class="info-card wni">
        <div class="overlay">
          <h3>PELAYANAN WNI</h3>
          <p>Temukan beragam pelayanan<br>Paspor Indonesia</p>
        </div>
      </a>
      <a href="{{ route('services.all_service', ['category' => 'WNA']) }}" class="info-card wna">
        <div class="overlay">
          <h3>PELAYANAN WNA</h3>
          <p>Temukan beragam pelayanan<br>Warga Negara Asing</p>
        </div>
      </a>
    </div>
  </div>
</section>


<!-- Unduhan -->
<section class="unduhan-section" data-aos="fade-right">
  <div class="unduhan-container">

    <!-- M-Paspor -->
    <div class="unduhan-card">
      <div class="unduhan-text">
        <h2>Unduh Aplikasi M-Paspor Sekarang!</h2>
        <p>Ajukan permohonan paspor baru atau penggantian secara daring. Mudah dan nyaman.</p>
        <div class="store-buttons">
          <a href="https://play.google.com/store/apps/details?id=id.go.imigrasi.paspor_online" target="_blank">
            <img src="{{ asset('user/images/gps.png') }}" alt="Google Play">
          </a>
          <a href="https://apps.apple.com/id/app/m-paspor/id1576336459" target="_blank">
            <img src="{{ asset('user/images/aps.png') }}" alt="App Store">
          </a>
        </div>
      </div>
      <div class="unduhan-image">
        <img src="{{ asset('user/images/image.png') }}" alt="M-Paspor">
      </div>
    </div>

    <!-- e-Visa -->
    <div class="unduhan-card reverse">
      <div class="unduhan-image">
        <img src="{{ asset('user/images/image.png') }}" alt="e-Visa">
      </div>
      <div class="unduhan-text">
        <h2>Do You Want to Visit Indonesia?</h2>
        <p>Get an Indonesian visa quick and easy through <br><strong>evisa.imigrasi.go.id</strong></p>
        <a href="https://evisa.imigrasi.go.id/" target="_blank" class="apply-button">
          <i class="fas fa-arrow-right"></i> APPLY NOW
        </a>
      </div>
    </div>

  </div>
</section>

<section id="services-section"  data-aos="fade-left">
  <div class="services-container">
    <div class="services-header">
      <h3>Yang Bisa Dilakukan Kanim Medan</h3>
      <p>Berbagai layanan dan sarana digital yang kami sediakan untuk kemudahan Anda.</p>
    </div>

    <div class="services-row">
      <a href="https://Youtube.com" target="_blank" class="service-box">
        <div class="service-icon"><i class="fa fa-shield"></i></div>
        <div class="service-content">
          <h4>Survey Penilaian Integritas - KPK</h4>
          <p>Ikut berkontribusi dalam penguatan integritas melalui survei nasional.</p>
        </div>
      </a>

      <a href="https://Youtube.com" target="_blank" class="service-box">
        <div class="service-icon"><i class="fa fa-box"></i></div>
        <div class="service-content">
          <h4>Survey Kepuasan Anti Korupsi</h4>
          <p>Suara Anda penting dalam memerangi korupsi dan meningkatkan layanan publik.</p>
        </div>
      </a>

      <a href="https://Youtube.com" target="_blank" class="service-box">
        <div class="service-icon"><i class="fa fa-thumbs-up"></i></div>
        <div class="service-content">
          <h4>Si Pengadu</h4>
          <p>Laporkan keluhan atau masukan Anda demi layanan yang lebih baik.</p>
        </div>
      </a>
    </div>
  </div>
</section>



<!-- ========================== Layanan Section =========================== -->
<section class="section-tautan-terkait" data-aos="zoom-in">
  <div class="tautan-terkait-wrapper">
    <div class="tautan-image">
      <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="Tautan Terkait">
    </div>
    <div class="tautan-carousel">
      <div class="carousel-wrapper" id="carousel-wrapper">
        <div class="carousel-card">
          <img src="{{ asset('user/images/icon.png') }}" alt="BPSDM">
          <p>BPSDM Hukum dan HAM</p>
        </div>
        <div class="carousel-card">
          <img src="{{ asset('user/images/icon.png') }}" alt="Lapor">
          <p>Lapor</p>
        </div>
        <div class="carousel-card">
          <img src="{{ asset('user/images/icon.png') }}" alt="Kemenkumham">
          <p>Kemenkumham RI</p>
        </div>
        <div class="carousel-card">
          <img src="{{ asset('user/images/icon.png') }}" alt="Imigrasi">
          <p>Imigrasi</p>
        </div>
        <div class="carousel-card">
          <img src="{{ asset('user/images/icon.png') }}" alt="Imigration Lounge">
          <p>Imigration Lounge</p>
        </div>
      </div>

      <div class="carousel-nav">
        <button class="carousel-btn prev" onclick="scrollCarousel(-1)">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-btn next" onclick="scrollCarousel(1)">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
</section>




<!-- ========================== Sosial Media Section =========================== -->
<section id="sosial-media" style="background-color:rgb(210, 210, 210); padding: 50px 0;" data-aos="zoom-in">
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
    <div class="instagram-reels" style="flex: 2; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
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

<section class="video-profil-section py-5 text-center bg-light" data-aos="zoom-in">
<div class="video-profil-section">
  <h2>Video Profil</h2>
  <p>Kantor Imigrasi Kota Medan</p>

  <div class="video-wrapper">
    <div class="video-container">
      <iframe 
        src="https://www.youtube.com/embed/QKrWDxG47OM?start=83" 
        title="Video Profil"
        allowfullscreen
        loading="lazy"
      ></iframe>
    </div>
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
      <img src="{{ asset('storage/' . $about[0]->image) }}" alt="Tentang Kami">
      </div>
    </div>
    </div>
  </section>
@endif

<!--- Berita --->
<section id="berita" class="berita-section wow fadeIn" data-aos="fade-up>
  <div class="container">
    <h3 class="berita-title">Berita Terbaru</h3>
    <div class="berita-card-container" style="display: flex; flex-wrap: wrap; gap: 24px;">
      @foreach($beritas as $berita)
      <a href="{{ route('user.news', $berita->id) }}" class="berita-card">
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
        <div class="berita-content">
          <h4>{{ $berita->judul }}</h4>
          <small>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</small>
          <p>{{ Str::limit(strip_tags($berita->konten), 100) }}</p>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>

<section class="pengumuman-container" data-aos="fade-up">
  <h2 class="judul-pengumuman">Pengumuman Terbaru </h2>
  @foreach($announcements as $item)
  <div class="card">
    <h3>{{ $item->title }}</h3>
    <div class="tanggal">Diposting: {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</div>
    <div class="konten">
      {{ Str::limit($item->content, 200) }}
    </div>
    <a href="{{ route('user.announcement', $item->id) }}">Selengkapnya...</a>
  </div>
  @endforeach
</section>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
@endsection
