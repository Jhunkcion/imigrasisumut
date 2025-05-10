@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{!! $article->content !!}</p>

    <h4>Berita Terbaru</h4>
    <ul>
        <a href="{{ route('articles.show', $article->slug) }}">

        
    </ul>
@endsection
