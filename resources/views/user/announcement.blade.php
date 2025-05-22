@extends('layouts.user')

@section ('content')
<section class="pengumumans-section">
  <div class="pengumumans-container">

    <div class="pengumumans-breadcrumb">
      <a href="{{ url('/') }}">Beranda</a> &raquo;
      <a href="{{ route('announcements.all_announcement') }}">Pengumuman</a> &raquo;
      <span>{{ $announcement->title }}</span>
    </div>

    <h1 class="pengumumans-title">{{ $announcement->title }}</h1>
    <p class="pengumumans-date">
      Diposting pada: {{ \Carbon\Carbon::parse($announcement->tanggal)->translatedFormat('d F Y') }}
    </p>

    <div class="pengumumans-content">
      {!! nl2br(e($announcement->content)) !!}
    </div>

    <a href="{{ route('announcements.all_announcement') }}" class="pengumumans-back-link">← Kembali ke Daftar Pengumuman</a>

  </div>
</section>

@endsection