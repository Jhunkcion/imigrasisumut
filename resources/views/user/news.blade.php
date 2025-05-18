@extends('layouts.user')

@section('content')
<div class="container">
    <h2>{{ $berita->judul }}</h2>
    <small>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</small>
    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" style="width:100%; max-height:400px; object-fit:cover;">
    <div class="konten-berita mt-4">
        {!! $berita->konten !!}
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-4">
        <a href="{{ route('news.all_news') }}" class="btn btn-secondary">← Kembali ke Berita</a>
    </div>
</div>
@endsection
