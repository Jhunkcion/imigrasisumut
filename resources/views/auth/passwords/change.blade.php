@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-start"> {{-- pindah ke kiri --}}
        <div class="col-md-5"> {{-- atur lebar form --}}
            <h3 class="mb-4">Ganti Password</h3>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.password.update') }}">
                @csrf

                <div class="mb-3">
                    <label for="current_password" class="form-label">Password Lama</label>
                    <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                           id="current_password" name="current_password" required>
                    @error('current_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="new_password" class="form-label">Password Baru</label>
                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                           id="new_password" name="new_password" required>
                    @error('new_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control"
                           id="new_password_confirmation" name="new_password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
