@extends('layouts.user')

@section('header')
<style>
.full-img {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 180px;
}

#hero {
    background: url('{{ asset('user/images/vb.jpg') }}') top center;
}

.image-center {
    display: block;
    margin-left: 6.5px;
    margin-right: 6.5px;
    width: 100%;
}

/* Tambahan styling untuk tombol carousel */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 10px;
    height: 10px;
    background-size: 100% 100%;
    color: rgb(10, 5, 5);

}

.carousel-control-prev,
.carousel-control-next {
    top: 300px;
    width: 5%;
    height: 5%;
    background-color: rgb(240, 207, 207);
}

/* Tambahan opsional untuk posisi */
.carousel-control-prev {
    left: 10px;
}

.carousel-control-next {
    right: 10px;
}

/*carousel card */
.carousel-container {
    position: relative;
    width: 100%;
    overflow: hidden;
}

#cardcar {
    display: flex;
    gap: 1rem;
    transition: transform 0.3s ease-in-out;
}

.car-card {
    min-width: 250px;
    max-width: 300px;
    border-radius: 20px;
    flex-shrink: 0;
}

.car-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    border: none;
    color: white;
    font-size: 20px;
    padding: 10px;
    z-index: 1;
    cursor: pointer;
    border-radius: 50%;
}

.car-nav.left {
    left: 0;
}

.car-nav.right {
    right: 0;
}
</style>
@endsection

@section('hero')

<!-- Carousel Header -->
<section id="carouselHero" class="carousel slide" data-bs-ride="carousel" style="height: 100vh; overflow: hidden;">
    <div class="carousel-inner h-100%">
        <div class="carousel-item active h-100%">
            <img src="{{ asset('user/images/vb.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;"
                alt="Slide 1">

        </div>
        <div class="carousel-item h-100">
            <img src="{{ asset('user/images/vb.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;"
                alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold text-white">Layanan Prima untuk Anda</h2>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</section>


@endsection

@section('content')

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
                style="background: url('{{ asset('about_image/' . $about[0]->image) }}') center top no-repeat; background-size: cover;">
            </div>
        </div>
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
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque</p>
        </div>

        <div class="news-grid"
     style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; padding: 20px;">
    @foreach ($categories as $category)
        <div class="news-card"
             style="border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background: #fff;">
            <a href="#" style="text-decoration: none; color: inherit;">
                <img src="{{ asset('category_image/' . $category->image) }}"
                     alt="{{ $category->name }}"
                     style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 15px;">
                    <h4 class="news-title" style="margin: 0; font-weight: bold;">{{ $category->name }}</h4>
                    <p class="news-date" style="color: #666; font-size: 14px;">{{ $category->description }}</p>
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
        cardWidth = cards[0].offsetWidth + 16; // 16 = gap-4 (1rem)

        // Clone last card dan prepend
        const lastCardClone = cards[totalCards - 1].cloneNode(true);
        carousel.prepend(lastCardClone);

        // Clone first card dan append
        const firstCardClone = cards[0].cloneNode(true);
        carousel.appendChild(firstCardClone);

        totalCards += 2;

        // Reset posisi awal ke index ke-1 (setelah clone awal)
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