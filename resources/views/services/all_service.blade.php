@extends('layouts.user')

@section('title', 'Semua Layanan')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Semua Layanan</h2>

    {{-- Filter Kategori --}}
    <div class="mb-4">
    <a href="{{ route('services.all_service') }}" class="btn {{ request('category') == '' ? 'btn-success fw-bold' : 'btn-outline-success' }}">
        Semua
    </a>
    <a href="{{ route('services.all_service', ['category' => 'WNI']) }}" class="btn {{ request('category') == 'WNI' ? 'btn-success fw-bold' : 'btn-outline-success' }}">
        WNI
    </a>
    <a href="{{ route('services.all_service', ['category' => 'WNA']) }}" class="btn {{ request('category') == 'WNA' ? 'btn-success fw-bold' : 'btn-outline-success' }}">
        WNA
    </a>
</div>


    {{-- Layanan List --}}
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
            <p class="text-muted">Tidak ada layanan untuk kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
