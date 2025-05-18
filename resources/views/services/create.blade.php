@extends('layouts.admin')

@section('title', 'Create Service')

@section('breadcrumbs', 'services')

@section('second-breadcrumb')
    <li>Create</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h3 align="center">Tambah Service Baru</h3>
                    </div>

                    {{-- Tampilkan error validasi --}}
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

                    {{-- Form input --}}
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-10">
                            {{-- Title --}}
                            <div class="mb-3">
                                <label for="title" class="font-weight-bold">Judul Service</label>
                                <input type="text" name="title"
                                    class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}"
                                    value="{{ old('title') }}" required>
                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                            </div>

                            {{-- Kategori --}}
                            <div class="form-group mb-3">
                                <label for="category" class="font-weight-bold">Kategori Layanan</label>
                                <select name="category" id="category"
                                    class="form-control {{ $errors->first('category') ? 'is-invalid' : '' }}" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="WNI" {{ old('category') == 'WNI' ? 'selected' : '' }}>WNI</option>
                                    <option value="WNA" {{ old('category') == 'WNA' ? 'selected' : '' }}>WNA</option>
                                </select>
                                <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                            </div>



                            {{-- Content --}}
                            <div class="mb-3">
                                <label for="content" class="font-weight-bold">Isi Service</label>
                                <textarea name="content" rows="5"
                                    class="form-control {{ $errors->first('content') ? 'is-invalid' : '' }}"
                                    required>{{ old('content') }}</textarea>
                                <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                            </div>

                            {{-- Image --}}
                            <div class="mb-3">
                                <label for="image" class="font-weight-bold">Gambar</label>
                                <input type="file" name="image"
                                    class="form-control {{ $errors->first('image') ? 'is-invalid' : '' }}" required>
                                <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                            </div>

                            {{-- Buttons --}}
                            <div class="mb-3 mt-4">
                                <a href="{{ route('services.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection