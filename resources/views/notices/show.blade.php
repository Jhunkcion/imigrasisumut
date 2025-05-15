@extends('layouts.user')

@section('title', $notice->name)

@section('breadcrumbs', 'Detail Pengumuman')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-2">{{ $notice->title }}</h3>
                <p class="text-muted">Dipublikasikan pada {{ $notice->created_at->format('d M Y') }}</p>

                {{-- Konten Artikel --}}
                <div class="mt-4">
                    {!! $notice->description !!}
                </div>

                <div class="mt-4">
                    <a href="{{ route('notices.index') }}" class="btn btn-secondary">← Kembali ke Daftar Artikel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
