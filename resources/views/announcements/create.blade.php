@extends('layouts.admin')

@section('title', 'Create Pengumuman')

@section('breadcrumbs', 'Pengumuman')

@section('second-breadcrumb')
    <li>Create</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 mb-3">
                    <h3 align="center">Tambah Pengumuman Baru</h3>
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

                <form action="{{ route('announcements.store') }}" method="POST">
                    @csrf
                    <div class="col-10">
                        <div class="mb-3">
                            <label for="title" class="font-weight-bold">Judul Pengumuman</label>
                            <input type="text" name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" required>
                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="font-weight-bold">Isi Pengumuman</label>
                            <textarea name="content" rows="5" class="form-control {{ $errors->first('content') ? 'is-invalid' : '' }}" required>{{ old('content') }}</textarea>
                            <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="font-weight-bold">Tanggal Pengumuman</label>
                            <input type="date" name="tanggal" class="form-control {{ $errors->first('tanggal') ? 'is-invalid' : '' }}" value="{{ old('tanggal') }}" required>
                            <div class="invalid-feedback">{{ $errors->first('tanggal') }}</div>
                        </div>

                        <div class="mb-3 mt-4">
                            <a href="{{ route('announcements.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Pengumuman</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
