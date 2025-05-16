@extends('layouts.admin')

@section('title', 'Edit berita')

@section('breadcrumbs', 'Berita' )

@section('second-breadcrumb')
	<li>Edit</li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
						<div class="col-12 mb-3">
							<h3 align="center"></h3>
						</div>
						<form action="{{route('news.update', [$berita->id])}}" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="_method" value="PUT">
							<div class="col-10">
								<div class="mb-3">
									<label for="berita" class="font-weight-bold">Nama Berita</label>
									<input type="text" name="name" placeholder="Berita ..." class="form-control {{$errors->first('name') ? "is-invalid" : ""}}" value="{{$berita->name}}" required>
									<div class="invalid-feedback"> {{$errors->first('name')}}</div>
								</div>
								<div class="mb-3">
									<label for="slug" class="font-weight-bold">Judul Berita</label>
									<input type="text" name="slug" placeholder="Judul ..." class="form-control {{$errors->first('slug') ? "is-invalid" : ""}}" value="{{$berita->slug}}">
									<div class="invalid-feedback"> {{$errors->first('slug')}}</div>
								</div>
								<div class="mb-3">
									<label for="description" class="font-weight-bold">Deskripsi Berita</label>
									<textarea type="text" name="description" placeholder="Deskripsi ..." class="form-control {{$errors->first('description') ? "is-invalid" : ""}}" value="">{{$berita->description}}</textarea>
									<div class="invalid-feedback"> {{$errors->first('description')}}</div>
								</div>
								<div class="mb-3">
									<label for="image" class="font-weight-bold d-flex">Image</label>
									@if($berita->image)
										{{-- <img src="{{asset('storage/'.$berita->image)}}" alt="image" width="120"> --}}
										<img src="{{asset('berita_image/'.$berita->image)}}" alt="" width="120px">
									@else   
										No Image
									@endif
									<input type="file" name="image" class="form-control mt-2" >
									<small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
								</div>
								<div class="mb-3 mt-4">
									<a href="{{route('news.index')}}" class="btn btn-md btn-secondary">Back</a>
									<button type="submit" class="btn btn-md btn-success">Save</button>
								</div>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
@endsection
