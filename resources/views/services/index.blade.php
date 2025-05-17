@extends('layouts.app')

@section('content')
    <h1>Selamat Datang di Situs Kami</h1>

    <h2>Layanan Kami</h2>
    <div class="service-preview">
        @foreach($latestServices as $service)
            <div class="service-box">
                <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}" width="200">
                <h3><a href="{{ route('services.show', $service->id) }}">{{ $service->title }}</a></h3>
                <p>{{ \Illuminate\Support\Str::limit($service->content, 100) }}</p>
            </div>
        @endforeach
    </div>

    <a href="{{ route('services.index') }}">Lihat semua layanan</a>
@endsection
