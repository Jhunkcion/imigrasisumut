@extends('layouts.admin')

@section('title', 'Create Berita')

@section('breadcrumbs', 'Beritas')

@section('second-breadcrumb')
    <li>Create</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 mb-3">
                    <h3 align="center">Tambah Berita Baru</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-10">
                        <div class="mb-3">
                            <label for="judul" class="font-weight-bold">Judul Berita</label>
                            <input type="text" name="judul" class="form-control {{ $errors->first('judul') ? 'is-invalid' : '' }}" value="{{ old('judul') }}" required>
                            <div class="invalid-feedback">{{ $errors->first('judul') }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="konten" class="font-weight-bold">Isi Berita</label>
                            <textarea name="konten" rows="5" class="form-control {{ $errors->first('konten') ? 'is-invalid' : '' }}" required>{{ old('konten') }}</textarea>
                            <div class="invalid-feedback">{{ $errors->first('konten') }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="font-weight-bold">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control {{ $errors->first('tanggal') ? 'is-invalid' : '' }}" value="{{ old('tanggal') }}" required>
                            <div class="invalid-feedback">{{ $errors->first('tanggal') }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="font-weight-bold">Gambar</label>
                            <input type="file" name="gambar" class="form-control {{ $errors->first('gambar') ? 'is-invalid' : '' }}" required>
                            <div class="invalid-feedback">{{ $errors->first('gambar') }}</div>
                        </div>

                        <div class="mb-3 mt-4">
                            <a href="{{ route('news.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                            <button type="submit">Simpan sebagai Draft</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
