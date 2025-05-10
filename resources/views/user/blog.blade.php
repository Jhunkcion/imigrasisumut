@extends('layouts.user') {{-- sesuaikan dengan layout kamu --}}

@section('content')
<section id="berita" class="blog-section">
    <div class="container">
        <h2 class="text-center">Ruang Berita</h2>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($article->thumbnail)
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                            <a href="{{ route('blog.show', $article->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $articles->links() }} {{-- jika pakai paginate --}}
        </div>
    </div>
</section>
@endsection
