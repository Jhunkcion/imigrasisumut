@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="mb-4">Semua Berita</h1>

    @if($news->isEmpty())
        <p>Tidak ada berita untuk ditampilkan.</p>
    @else
        <div class="row">
            @foreach($news as $item)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->content, 150) }}</p>
                            <a href="{{ route('user.news', $item->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
