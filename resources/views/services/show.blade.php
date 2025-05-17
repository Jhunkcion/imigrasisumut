@extends('layouts.app')

@section('content')
<h1>{{ $service->title }}</h1>
<img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}" width="300">
<div>{!! nl2br(e($service->content)) !!}</div>
<a href="{{ route('services.index') }}">← Kembali ke semua service</a>
@endsection