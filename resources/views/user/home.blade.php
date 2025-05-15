@extends('layouts.user')


@section('content')

<!-- Section carousel -->
<div class="carousel-container">
        <div class="carousel" id="carousel">
            <div class="carousel-item active">
                <img src="{{ asset('user/images/image.png') }}" alt="Slide 1">
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
        <button class="carousel-control prev" id="prev">&#10094;</button>
        <button class="carousel-control next" id="next">&#10095;</button>
    </div>

<!--========================== Layanan Section ============================-->
<section class="py-5 bg-white">
    <div class="container">
        <h3 class="section-title">Layanan Warga Negara Indonesia</h3>
        <div class="d-flex gap-4">

            <!-- Kartu Besar -->
            <div class="card flex-shrink-0" style="min-width: 250px; max-width: 300px; border-radius: 20px; right: 20;">
                <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top" alt="Layanan WNI">
                <div class="card-body text-center bg-dark rounded-bottom text-white">
                    <h5 class="card-title fw-bold m-0">LAYANAN WNI</h5>
                </div>
            </div>

            <!-- Carousel -->
            <div class="carousel-container w-100" style="position: relative;">
                <button class="car-nav left" onclick="prevCard()">‹</button>
                <button class="car-nav right" onclick="nextCard()">›</button>

                <div id="cardcar">
                    <div class="card car-card">
                        <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top"
                            alt="Penggantian Paspor">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Penggantian Paspor</h5>
                            <p class="card-text small text-muted">Permohonan paspor bagi yang telah memiliki paspor
                                sebelumnya...</p>
                        </div>
                    </div>

                    <div class="card car-card">
                        <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top"
                            alt="Perubahan Data">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Perubahan Data Paspor</h5>
                            <p class="card-text small text-muted">Permohonan perubahan nama, TTL, atau jenis kelamin...
                            </p>
                        </div>
                    </div>

                    <div class="card car-card">
                        <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top"
                            alt="Paspor Hilang">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Paspor Hilang dan Rusak</h5>
                            <p class="card-text small text-muted">Permohonan penggantian paspor karena hilang atau
                                rusak...</p>
                        </div>
                    </div>

                    <div class="card car-card">
                        <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top"
                            alt="Paspor Hilang">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Paspor Hilang dan Rusak</h5>
                            <p class="card-text small text-muted">Permohonan penggantian paspor karena hilang atau
                                rusak...</p>
                        </div>
                    </div>
                    <div class="card car-card">
                        <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top"
                            alt="Paspor Hilang">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Paspor Hilang dan Rusak</h5>
                            <p class="card-text small text-muted">Permohonan penggantian paspor karena hilang atau
                                rusak...</p>
                        </div>
                    </div>
                    <div class="card car-card">
                        <img src="{{ asset('user/images/image.png') }}" class="card-img-top rounded-top"
                            alt="Paspor Hilang">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Paspor Hilang dan Rusak</h5>
                            <p class="card-text small text-muted">Permohonan penggantian paspor karena hilang atau
                                rusak...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<div class="container">
    <h3 class="section-title">Layanan Warga Negara Asing</h3>
</div>

<div class="card-container">
    <div class="card">
        <img src="user/images/image.png" alt="Perubahan Data">
        <h3>Perubahan Data Paspor</h3>
        <p>Permohonan perubahan data nama, tempat tanggal lahir, atau jenis kelamin pada paspor melalui proses BAP
            (Berita Acara Pemeriksaan).</p>
    </div>

    <div class="card">
        <img src="layanan2.jpg" alt="Paspor Hilang">
        <h3>Paspor Hilang dan Rusak</h3>
        <p>Permohonan penggantian paspor dikarenakan paspor lamanya hilang/rusak melalui proses BAP (Berita Acara
            Pemeriksaan).</p>
    </div>

    <div class="card">
        <img src="layanan3.jpg" alt="Layanan Prioritas">
        <h3>Layanan Prioritas</h3>
        <p>Layanan paspor bagi kelompok prioritas (balita, lansia >60 tahun, disabilitas, ibu hamil, ibu menyusui).</p>
    </div>
</div>
</section>
<!--========================== About Us Section ============================-->
<section id="about">
    <div class="container">
        <div class="row about-container">
            <div class="col-lg-7 content order-lg-1 order-2">
                <h2 class="title">Tentang Kami</h2>
                <p>{!! $about[0]->caption !!}</p>
            </div>
            <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight"
                style="position: relative; background: url('{{ asset('about_image/' . $about[0]->image) }}') center top no-repeat; background-size: cover;">

                <a href="{{ url('/contact') }}"
                   class="btn btn-primary"
                   style="position: absolute; bottom: 20px; left: 20px; z-index: 10; background-color: rgba(0,0,0,0.7); color: #fff; padding: 10px 15px; border-radius: 5px; text-decoration: none;">
                    Cek Selengkapnya
                </a>

            </div>
        </div>
    </div>
</section>


<!--========================== Sosial Media Section ============================-->
<section id="sosial-media" style="background-color: #f9f9f9; padding: 50px 0;">
            <div
                style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: 20px;">
                <!-- Kartu Sosial Media -->
                <div class="social-media-cards" style="flex: 1; min-width: 250px;">
                    <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">YUK FOLLOW JUGA <br>SOSIAL MEDIA
                        KAMI
                    </h2>
                    <div class="social-link-wrapper">
                        <a href="https://instagram.com/kanimjaksel" target="_blank" class="social-link">
                            <i class="fab fa-instagram" style="color: #E4405F;"></i> Instagram
                        </a>
                        <a href="#"
                            style="display: flex; align-items: center; background: #fff; border-radius: 12px; padding: 12px 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-decoration: none; color: black;">
                            <i class="fab fa-x-twitter" style="font-size: 20px; margin-right: 12px;"></i> Twitter
                        </a>
                        <a href="#"
                            style="display: flex; align-items: center; background: #fff; border-radius: 12px; padding: 12px 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-decoration: none; color: black;">
                            <i class="fab fa-facebook-f" style="font-size: 20px; margin-right: 12px; color: #3b5998;"></i>
                            Facebook
                        </a>
                        <a href="#"
                            style="display: flex; align-items: center; background: #fff; border-radius: 12px; padding: 12px 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-decoration: none; color: black;">
                            <i class="fab fa-tiktok" style="font-size: 20px; margin-right: 12px; color: black;"></i> TikTok
                        </a>
                        <a href="#"
                            style="display: flex; align-items: center; background: #fff; border-radius: 12px; padding: 12px 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-decoration: none; color: black;">
                            <i class="fab fa-youtube" style="font-size: 20px; margin-right: 12px; color: red;"></i> YouTube
                        </a>
                    </div>
                </div>

                <div class="reel-gallery">
  <a href="https://www.instagram.com/reel/DJJrkAMRClF/" target="_blank" class="reel-thumb-container">
    <img src={{ asset('user/images/vb.jpg') }} alt="Reel 1" class="reel-thumb">
    <i class="fas fa-play play-icon"></i>
  </a>
  <a href="https://www.instagram.com/reel/DIafvSxR983/" target="_blank" class="reel-thumb-container">
    <img src="path/to/thumbnail2.jpg" alt="Reel 2" class="reel-thumb">
    <i class="fas fa-play play-icon"></i>
  </a>
  <a href="https://www.instagram.com/reel/DI-2m0wR98B/" target="_blank" class="reel-thumb-container">
    <img src="path/to/thumbnail3.jpg" alt="Reel 3" class="reel-thumb">
    <i class="fas fa-play play-icon"></i>
  </a>
</div>

        </section>


<!--========================== Services Section ============================-->
<section id="services">
    <div class="container wow fadeIn">
        <div class="section-header">
            <h3 class="section-title">Yang Bisa Dilakukan Kanim Medan</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="box">
                    <div class="icon"><i class="fa fa-shield"></i></div>
                    <h4 class="title">Sarang Asing</h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                        sint occaecati cupiditate non provident</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="box">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <h4 class="title">Survey Kepuasan Masyarakat</h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat tarad limino ata</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="box">
                    <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                    <h4 class="title">Survey Penilaian Integritas</h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="box">
                    <div class="icon"><i class="fa fa-cogs"></i></div>
                    <h4 class="title">Si Pengadu</h4>
                    <p class="description">Facilis est et expedita distinctio nam libero tempore cum soluta nobis est
                        eligendi optio cumque nihil impedit quo minus.</p>
                </div>
            </div>
        </div>
</section>

<!--========================== Testimonials Section ============================-->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="section-title">Tautan Terkait</h3>
        <div class="d-flex gap-4 flex-wrap flex-md-nowrap">

            <!-- Card Besar Kiri -->
            <div class="card flex-shrink-0" style="min-width: 250px; max-width: 300px; border-radius: 20px;">
                <img src="{{ asset('user/images/vb.jpg') }}" class="card-img-top rounded-top" alt="Tautan Terkait">
                <div class="card-body text-center bg-dark rounded-bottom text-white">
                    <h5 class="card-title fw-bold m-0">TAUTAN TERKAIT</h5>
                    <p class="small m-0">Kunjungi juga tautan berikut</p>
                </div>
            </div>

            <!-- Carousel Kanan -->
            <div class="carousel-container w-100 position-relative">
                <button class="car-nav left" onclick="prevCard()">‹</button>
                <button class="car-nav right" onclick="nextCard()">›</button>

                <div id="cardcar" class="d-flex overflow-auto flex-nowrap gap-3 px-2">
                    @foreach (range(1, 6) as $i)
                        <div class="card car-card flex-shrink-0" style="width: 150px; border-radius: 15px;">
                            <img src="{{ asset('user/images/image.png') }}" class="card-img-top p-3" alt="Tautan {{ $i }}">
                            <div class="card-body text-center">
                                <p class="card-text small">Tautan {{ $i }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


<!--========================== News Section ============================-->
<section id="news">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">Berita</h3>
            <p class="section-description">Kumpulan berita terkini tentang Direktorat Jenderal Imigrasi</p>
        </div>

        <div class="news-grid"
     style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; padding: 20px;">
    @foreach ($beritas as $berita)
        <div class="news-card"
             style="border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background: #fff;">
            <a href="#" style="text-decoration: none; color: inherit;">
                <img src="{{ asset('berita_image/' . $berita->image) }}"
                     alt="{{ $berita->name }}"
                     style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 15px;">
                    <h4 class="news-title" style="margin: 0; font-weight: bold;">{{ $berita->name }}</h4>
                    <p class="news-date" style="color: #666; font-size: 14px;">{{ $berita->description }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>

</div>
</section>

@endsection
<script>
/*Carousel Card */
let currentIndex = 1; // mulai dari 1 karena ada clone di awal
let cardWidth = 0;
let carousel;
let cards;
let totalCards;

document.addEventListener('DOMContentLoaded', function () {
    console.log("DOMContentLoaded fired - carousel script running");
    carousel = document.getElementById("cardcar");
    cards = document.querySelectorAll("#cardcar .card");
    totalCards = cards.length;

    if (totalCards > 0) {
        cardWidth = cards[0].offsetWidth + 16;

        // Clone last card dan prepend
        const lastCardClone = cards[totalCards - 1].cloneNode(true);
        carousel.prepend(lastCardClone);

        // Clone first card dan append
        const firstCardClone = cards[0].cloneNode(true);
        carousel.appendChild(firstCardClone);

        totalCards += 2;

        // Set initial position
        carousel.style.transition = "none";
        carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    function updateCarousel(animate = true) {
        if (animate) {
            carousel.style.transition = "transform 0.3s ease-in-out";
        } else {
            carousel.style.transition = "none";
        }
        carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    window.nextCard = function () {
        console.log("nextCard called");
        currentIndex++;
        updateCarousel();

        if (currentIndex === totalCards - 1) {
            setTimeout(() => {
                carousel.style.transition = "none";
                currentIndex = 1;
                updateCarousel(false);
            }, 300); // match transition
        }
    };

    window.prevCard = function () {
        console.log("prevCard called");
        currentIndex--;
        updateCarousel();

        if (currentIndex === 0) {
            setTimeout(() => {
                carousel.style.transition = "none";
                currentIndex = totalCards - 2;
                updateCarousel(false);
            }, 300); // match transition
        }
    };

    // Auto-play tiap 3 detik (sesuai permintaan)
    setInterval(() => {
        window.nextCard();
    }, 3000);
});


</script>
