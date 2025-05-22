@extends('layouts.admin')

@section('title', 'Edit Pengumuman')

@section('breadcrumbs', 'Pengumuman' )

@section('second-breadcrumb')
	<li>Edit</li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="col-12 mb-3">
						<h3 align="center">Edit Pengumuman</h3>
					</div>

					<form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
						@csrf
						@method('PUT')

						<div class="col-10">
							<div class="mb-3">
								<label for="title" class="font-weight-bold">Judul Pengumuman</label>
								<input type="text" name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" value="{{ old('title', $announcement->title) }}" required>
								<div class="invalid-feedback">{{ $errors->first('title') }}</div>
							</div>

							<div class="mb-3">
								<label for="content" class="font-weight-bold">Isi Pengumuman</label>
								<textarea name="content" rows="5" class="form-control {{ $errors->first('content') ? 'is-invalid' : '' }}" required>{{ old('content', $announcement->content) }}</textarea>
								<div class="invalid-feedback">{{ $errors->first('content') }}</div>
							</div>

							<div class="mb-3">
								<label for="tanggal" class="font-weight-bold">Tanggal Pengumuman</label>
								<input type="date" name="tanggal" class="form-control {{ $errors->first('tanggal') ? 'is-invalid' : '' }}" value="{{ old('announcement_date', $announcement->announcement_date) }}" required>
								<div class="invalid-feedback">{{ $errors->first('tanggal') }}</div>
							</div>

							<div class="mb-3 mt-4">
								<a href="{{ route('announcements.index') }}" class="btn btn-md btn-secondary">Kembali</a>
								<button type="submit" class="btn btn-md btn-success">Simpan</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
@endsection
