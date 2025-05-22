@extends('layouts.user')

@section('content')
<div class="standar-wrapper">
    <div class="standar-sidebar">
        <h3>Navigasi</h3>
        <ul class="standar-nav-list">
            <li><a href="#standar" class="standar-nav-link">Standar Pelayanan</a></li>
            <li><a href="#sop" class="standar-nav-link">SOP Pengaduan</a></li>
        </ul>
    </div>

    <div class="standar-main">
        <section id="standar">
            <h2 class="standar-section-title">Standar Pelayanan</h2>

            <a href="{{ asset('user/dokumen/standar/standar-pelayanan-1.pdf') }}" download class="standar-card-link">
                <div class="standar-card">
                    <i class="fas fa-file-alt"></i>
                    <div>
                        <p class="standar-title">Standar Layanan Kantor Imigrasi Sumut </p>
                        <p class="standar-desc">Tahun 2025</p>
                    </div>
                </div>
            </a>

            <a href="{{ asset('user/dokumen/standar/standar-pelayanan-2.pdf') }}" download class="standar-card-link">
                <div class="standar-card">
                    <i class="fas fa-file-alt"></i>
                    <div>
                        <p class="standar-title">Standar Layanan Kantor Imigrasi Sumut</p>
                        <p class="standar-desc">Tahun 2024</p>
                    </div>
                </div>
            </a>

            <a href="{{ asset('user/dokumen/standar/standar-pelayanan-3.pdf') }}" download class="standar-card-link">
                <div class="standar-card">
                    <i class="fas fa-file-alt"></i>
                    <div>
                        <p class="standar-title">Standar Layanan Kantor Imigrasi Sumut</p>
                        <p class="standar-desc">Tahun 2023</p>
                    </div>
                </div>
            </a>
        </section>

        <section id="sop" style="margin-top: 60px;">
            <h2 class="standar-section-title">SOP Pengaduan</h2>

            <a href="{{ asset('user/dokumen/standar/sop-pengaduan.pdf') }}" download class="standar-card-link">
                <div class="standar-card">
                    <i class="fas fa-file-alt"></i>
                    <div>
                        <p class="standar-title">SOP Penanganan Pengaduan Masyarakat</p>
                        <p class="standar-desc">Klik untuk mengunduh file PDF</p>
                    </div>
                </div>
            </a>
        </section>
    </div>
</div>
@endsection
