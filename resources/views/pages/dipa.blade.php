@extends('layouts.user')

@section('content')
<div class="dipa-wrapper">
    <div class="dipa-sidebar">
        <h3>Daftar Isian Pelaksanaan Anggaran</h3>
    </div>
    <div class="dipa-main">
        <h2 class="dipa-title-section">Daftar Isian Pelaksanaan Anggaran</h2>

        <div class="dipa-list">
            <a href="{{ asset('user/dokumen/dipa/dipa-2023.pdf') }}" class="dipa-card" download>
                <i class="fas fa-file-alt"></i>
                <div class="dipa-card-content">
                    <p class="dipa-card-title">DIPA</p>
                    <p class="dipa-card-year">2023</p>
                </div>
            </a>

            <a href="{{ asset('user/dokumen/dipa/dipa-2022.pdf') }}" class="dipa-card" download>
                <i class="fas fa-file-alt"></i>
                <div class="dipa-card-content">
                    <p class="dipa-card-title">DIPA</p>
                    <p class="dipa-card-year">2022</p>
                </div>
            </a>

            <a href="{{ asset('user/dokumen/dipa/dipa-2021.pdf') }}" class="dipa-card" download>
                <i class="fas fa-file-alt"></i>
                <div class="dipa-card-content">
                    <p class="dipa-card-title">DIPA</p>
                    <p class="dipa-card-year">2021</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
