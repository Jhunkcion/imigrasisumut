@extends('layouts.admin')

@section('title', $article->title)

@section('breadcrumbs', 'Detail Article')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-2">{{ $article->title }}</h3>
                <p class="text-muted">Dipublikasikan pada {{ $article->created_at->format('d M Y') }}</p>

                {{-- Kategori --}}
                @if ($article->categories && $article->categories->count())
                    <div class="mb-3">
                        <strong>Kategori:</strong>
                        @foreach ($article->categories as $category)
                            <span class="badge badge-info">{{ $category->name }}</span>
                        @endforeach
                    </div>
                @endif

                {{-- Konten Artikel --}}
                <div class="mt-4">
                    {!! $article->content !!}
                </div>

                <div class="mt-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">← Kembali ke Daftar Artikel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
