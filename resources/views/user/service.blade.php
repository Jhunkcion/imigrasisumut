@extends('layouts.user')

@section('content')
<div class="container">
    <h2>{{ $service->title }}</h2>
    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="width:100%; max-height:400px; object-fit:cover;">
    <p>{{ $service->content }}</p>

    <a href="{{ route('user.all_service') }}" class="btn btn-primary mt-4">Lihat Semua Layanan</a>
[]
</div>
@endsection
