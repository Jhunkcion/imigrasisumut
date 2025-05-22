@extends('layouts.user')

@section('content')
<div class="lakip-wrapper">
    <div class="lakip-sidebar">
        <h3>Laporan Akuntabilitas Kinerja Instansi Pemerintah</h3>
    </div>
    <div class="lakip-main">
        <h2 class="lakip-title-section">Laporan Akuntabilitas Kinerja Instansi Pemerintah</h2>

        <div class="lakip-list">
            <a href="{{ asset('user/dokumen/lakip/lakip-2023.pdf') }}" class="lakip-card" download>
                <i class="fas fa-file-alt"></i>
                <div class="lakip-card-content">
                    <p class="lakip-card-title">LAKIP</p>
                    <p class="lakip-card-year">2023</p>
                </div>
            </a>

            <a href="{{ asset('user/dokumen/lakip/lakip-2022.pdf') }}" class="lakip-card" download>
                <i class="fas fa-file-alt"></i>
                <div class="lakip-card-content">
                    <p class="lakip-card-title">LAKIP</p>
                    <p class="lakip-card-year">2022</p>
                </div>
            </a>

            <a href="{{ asset('user/dokumen/lakip/lakip-2021.pdf') }}" class="lakip-card" download>
                <i class="fas fa-file-alt"></i>
                <div class="lakip-card-content">
                    <p class="lakip-card-title">LAKIP</p>
                    <p class="lakip-card-year">2021</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
