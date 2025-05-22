@extends('layouts.user')

@section('content')

<section class="announcement-list-section">
  <div class="announcement-container">
    <h2 class="announcement-title">Daftar Pengumuman</h2>
    
    <div class="cards-wrapper">
      @foreach($announcements as $item)
      <div class="card">
        <h3>{{ $item->title }}</h3>
        <div class="tanggal">Diposting: {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</div>
        <div class="konten">{{ \Illuminate\Support\Str::limit(strip_tags($item->content), 120) }}</div>
        <a href="{{ route('user.announcement', $item->id) }}">Selengkapnya</a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
