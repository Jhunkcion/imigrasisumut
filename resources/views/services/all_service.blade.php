@extends('layouts.user')

@section('title', 'Semua Layanan')

@section('content')
<style>
    .service-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .service-heading {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .service-tabs {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .service-tab {
        padding: 0.5rem 1.2rem;
        border-radius: 999px;
        background-color: #f0f0f0;
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .service-tab:hover {
        background-color: #ddd;
    }

    .service-tab.active {
        background-color: #333;
        color: #fff;
        font-weight: 700;
    }

    .service-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .service-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
    }

    .accordion-toggle {
        display: none;
    }

    .accordion-title {
        display: block;
        padding: 1rem;
        font-weight: bold;
        background-color: #f7f7f7;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .accordion-title:hover {
        background-color: #e0e0e0;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.4s ease;
        padding: 0 1rem;
        background-color: #fff;
        color: #555;
    }

    .accordion-toggle:checked ~ .accordion-content {
        max-height: 500px;
        padding: 1rem;
    }

    .service-text-center {
        text-align: center;
    }
</style>

<div class="service-container">
    <h2 class="service-heading">Layanan</h2>

    {{-- Navigasi Kategori --}}
    <div class="service-tabs">
        <a href="{{ route('services.all_service') }}"
           class="service-tab {{ request('category') == '' ? 'active' : '' }}">
           Semua
        </a>
        <a href="{{ route('services.all_service', ['category' => 'WNI']) }}"
           class="service-tab {{ request('category') == 'WNI' ? 'active' : '' }}">
           WNI
        </a>
        <a href="{{ route('services.all_service', ['category' => 'WNA']) }}"
           class="service-tab {{ request('category') == 'WNA' ? 'active' : '' }}">
           WNA
        </a>
    </div>

    {{-- Daftar Layanan --}}
    <div class="service-list">
        @forelse ($services as $index => $service)
            <div class="service-card">
                <input type="checkbox" id="accordion-{{ $index }}" class="accordion-toggle">
                <label for="accordion-{{ $index }}" class="accordion-title">{{ $service->title }}</label>
                <div class="accordion-content">
                    {{ \Illuminate\Support\Str::limit($service->content, 255) }}
                </div>
            </div>
        @empty
            <p class="service-text-center">Tidak ada layanan dalam kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
