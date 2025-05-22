@extends('layouts.user')

@section('content')
<div class="container zi-wrapper">
    <aside class="zi-sidebar">
        <h3 class="zi-sidebar-title">Zona Integritas</h3>
        <ul class="zi-menu">
            <li><a href="#pendahuluan">Pendahuluan</a></li>
            <li><a href="#dasar-hukum">Dasar Hukum</a></li>
            <li><a href="#persyaratan">Persyaratan</a></li>
            <li><a href="#proses">Proses Pembangunan</a></li>
            <li><a href="#komponen">Komponen Pengungkit</a></li>
            <li><a href="#inovasi">Inovasi</a></li>
            <li><a href="#dokumentasi">Dokumentasi</a></li>
            <li><a href="#capaian">Capaian</a></li>
        </ul>
    </aside>

    <main class="zi-main">
        <h2 class="zi-title">Zona Integritas</h2>

        <section id="pendahuluan" class="zi-section">
            <button class="accordion-btn">Pendahuluan</button>
            <div class="accordion-content">
                <p>Pemerintah melalui Peraturan Presiden Republik Indonesia Nomor 81 Tahun 2010 tentang Grand Design Reformasi Birokrasi 2010 – 2025...</p>
            </div>
        </section>

        <section id="dasar-hukum" class="zi-section">
            <button class="accordion-btn">Dasar Hukum</button>
            <div class="accordion-content">
                <ol>
                    <li>Perpres 81 / 2010 tentang Grand Design Reformasi Birokrasi 2010-2025.</li>
                    <li>Permen PANRB 20 / 2012 tentang Pedoman Umum Pembangunan Zona Integritas...</li>
                    <li>Permen PANRB 60 / 2012 tentang Pedoman Penanganan Zona Integritas...</li>
                    <li>Permen PANRB 52 / 2014 tentang Pedoman Pembangunan Zona Integritas...</li>
                </ol>
            </div>
        </section>

        <section id="persyaratan" class="zi-section">
            <button class="accordion-btn">Persyaratan Pembangunan Zona Integritas</button>
            <div class="accordion-content">
                <p>Berdasarkan Permen PANRB 52 / 2014... </p>
            </div>
        </section>

        <section id="proses" class="zi-section">
            <button class="accordion-btn">Proses Pembangunan
            </button>
            <div class="accordion-content">
                <ol>
                    <li>Perpres 81 / 2010 tentang Grand Design Reformasi Birokrasi 2010-2025.</li>
                    <li>Permen PANRB 20 / 2012 tentang Pedoman Umum Pembangunan Zona Integritas...</li>
                    <li>Permen PANRB 60 / 2012 tentang Pedoman Penanganan Zona Integritas...</li>
                    <li>Permen PANRB 52 / 2014 tentang Pedoman Pembangunan Zona Integritas...</li>
                </ol>
            </div>
        </section>

        <section id="komponen" class="zi-section">
            <button class="accordion-btn">Komponen Pengungkit</button>
            <div class="accordion-content">
                <ol>
                    <li>Perpres 81 / 2010 tentang Grand Design Reformasi Birokrasi 2010-2025.</li>
                    <li>Permen PANRB 20 / 2012 tentang Pedoman Umum Pembangunan Zona Integritas...</li>
                    <li>Permen PANRB 60 / 2012 tentang Pedoman Penanganan Zona Integritas...</li>
                    <li>Permen PANRB 52 / 2014 tentang Pedoman Pembangunan Zona Integritas...</li>
                </ol>
            </div>
        </section>

        <section id="inovasi" class="zi-section">
            <button class="accordion-btn">Inovasi</button>
            <div class="accordion-content">
                <ol>
                    <li>Perpres 81 / 2010 tentang Grand Design Reformasi Birokrasi 2010-2025.</li>
                    <li>Permen PANRB 20 / 2012 tentang Pedoman Umum Pembangunan Zona Integritas...</li>
                    <li>Permen PANRB 60 / 2012 tentang Pedoman Penanganan Zona Integritas...</li>
                    <li>Permen PANRB 52 / 2014 tentang Pedoman Pembangunan Zona Integritas...</li>
                </ol>
            </div>
        </section>

        <section id="dokumentasi" class="zi-section">
            <button class="accordion-btn">Dokumentasi</button>
            <div class="accordion-content">
                <ol>
                    <li>Perpres 81 / 2010 tentang Grand Design Reformasi Birokrasi 2010-2025.</li>
                    <li>Permen PANRB 20 / 2012 tentang Pedoman Umum Pembangunan Zona Integritas...</li>
                    <li>Permen PANRB 60 / 2012 tentang Pedoman Penanganan Zona Integritas...</li>
                    <li>Permen PANRB 52 / 2014 tentang Pedoman Pembangunan Zona Integritas...</li>
                </ol>
            </div>
        </section>

        <section id="capaian" class="zi-section">
            <button class="accordion-btn">Capaian</button>
            <div class="accordion-content">
                <ol>
                    <li>Perpres 81 / 2010 tentang Grand Design Reformasi Birokrasi 2010-2025.</li>
                    <li>Permen PANRB 20 / 2012 tentang Pedoman Umum Pembangunan Zona Integritas...</li>
                    <li>Permen PANRB 60 / 2012 tentang Pedoman Penanganan Zona Integritas...</li>
                    <li>Permen PANRB 52 / 2014 tentang Pedoman Pembangunan Zona Integritas...</li>
                </ol>
            </div>
        </section>

    </main>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const accButtons = document.querySelectorAll(".accordion-btn");

    accButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Auto-close others
            accButtons.forEach(btn => {
                if (btn !== this) {
                    btn.classList.remove("active");
                    btn.nextElementSibling.style.maxHeight = null;
                }
            });

            // Toggle current
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            if (this.classList.contains("active")) {
                content.style.maxHeight = content.scrollHeight + "px";
            } else {
                content.style.maxHeight = null;
            }
        });
    });

    // Smooth scroll for sidebar anchor
    document.querySelectorAll(".zi-menu a").forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>
@endpush
