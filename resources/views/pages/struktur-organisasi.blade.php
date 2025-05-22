@extends('layouts.user')

@section('content')
<section class="struktur-section">
    <div class="container">
        <h2 class="struktur-title">Struktur Organisasi</h2>
        <p class="struktur-subtitle">Kantor Imigrasi Sumatera Utara</p>
        <img src="{{ asset('user/images/struktur-organisasi.png') }}" alt="Struktur Organisasi" class="struktur-image">

        <!-- Kepala Kantor -->
        <div class="struktur-kepala">
            <h3>Kepala Kantor Imigrasi Sumatera Utara</h3>
            <p class="nama-pejabat">BUGIE KURNIAWAN</p>
            <p class="nip">NIP : 198706292008121001</p>
            <img src="{{ asset('user/images/kepala.png') }}" alt="Kepala Kantor">
        </div>

        <!-- Bagian Tata Usaha -->
        <div class="struktur-bagian">
            <h4>Bagian Tata Usaha</h4>
            <div class="struktur-grid">
                <div class="struktur-card">
                    <img src="{{ asset('user/images/tatausaha1.png') }}" alt="Tata Usaha">
                    <p class="jabatan">Kepala Bagian Tata Usaha</p>
                    <p class="nama">JOKO HANDOKO</p>
                    <p class="nip">NIP : 198905012010121003</p>
                </div>
                <div class="struktur-card">
                    <img src="{{ asset('user/images/tatausaha2.png') }}" alt="Kepegawaian">
                    <p class="jabatan">Kepala Subbag Kepegawaian</p>
                    <p class="nama">NAMA PEJABAT</p>
                    <p class="nip">NIP : xxxxxxxxxxxxxxxx</p>
                </div>
                <div class="struktur-card">
                    <img src="{{ asset('user/images/tatausaha3.png') }}" alt="Keuangan">
                    <p class="jabatan">Kepala Subbagian Keuangan</p>
                    <p class="nama">DESI DAMAYANTI</p>
                    <p class="nip">NIP : xxxxxxxxxxxxxxxx</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
