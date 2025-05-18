@extends('layouts.admin')

@section('title', 'Edit Service')

@section('breadcrumbs', 'services')

@section('second-breadcrumb')
    <li>Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 mb-3">
                    <h3 align="center">Edit Service</h3>
                </div>
                <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-10">
                        <div class="mb-3">
                            <label for="title" class="font-weight-bold">Judul Service</label>
                            <input type="text" name="title" placeholder="Judul Service ..." 
                                class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" 
                                value="{{ old('title', $service->title) }}" required>
                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        </div>

                            <div class="form-group mb-3">
                                <label for="category" class="font-weight-bold">Kategori Layanan</label>
                                <select name="category" id="category"
                                    class="form-control {{ $errors->first('category') ? 'is-invalid' : '' }}" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="WNI" {{ old('category') ?? $service->category ?? '' == 'WNI' ? 'selected' : '' }}>WNI</option>
                                    <option value="WNA" {{ old('category') ?? $service->category ?? '' == 'WNA' ? 'selected' : '' }}>WNA</option>
                                </select>
                                <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                            </div>

                        <div class="mb-3">
                            <label for="content" class="font-weight-bold">Isi Service</label>
                            <textarea name="content" rows="5" placeholder="Isi Service ..." 
                                class="form-control {{ $errors->first('content') ? 'is-invalid' : '' }}" required>{{ old('content', $service->content) }}</textarea>
                            <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="font-weight-bold d-flex">Gambar</label>
                            @if($service->image)
                                <img src="{{ asset('services_image/' . $service->image) }}" alt="Gambar Service" width="120">
                            @else   
                                <p>No Image</p>
                            @endif
                            <input type="file" name="image" class="form-control mt-2">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                        </div>

                        <div class="mb-3 mt-4">
                            <a href="{{ route('services.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
