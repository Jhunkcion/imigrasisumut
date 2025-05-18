@extends('layouts.user') <!-- ganti sesuai layout kamu -->

@section('title', 'Semua Layanan')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Semua Layanan</h2>

    <div class="row">
        @forelse ($services as $service)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="{{ $service->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text">{{ Str::limit($service->content, 100) }}</p>
                        <a href="{{ route('user.service', $service->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Tidak ada layanan yang tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
