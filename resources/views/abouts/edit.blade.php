@extends('layouts.admin')

@section('title', 'Edit About')

@section('breadcrumbs', 'About')

@section('second-breadcrumb')
    <li> Edit About</li>
@endsection

@section('content')
    <!-- table  -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        
                        <h3 class="text-center mt-3 mb-5">Edit About</h3>
                        
                        <div class="row">
                            <div class="col-3 mt-4">
                                <div class="card shadow" >
                                    <img src="{{asset('storage/'.$about->image)}}" class="card-img-top" alt="image">
                                </div>
                            </div>
                            <div class="col-9">
                                <form action="{{route('abouts.update', [$about->id])}}" method="POST" class="d-inline" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <p>Caption:</p>
                                    <p>
                                    <textarea name="caption" id="content" rows="10" class="form-control ckeditor" >{{$about->caption}}</textarea>
                                    </p>
                                    <div class="row">

                                        <div class="d-inline col-6" >
                                            <input type="file" name="image">
                                            <br>
                                            <small class="font-italic text-danger" style="font-size:11px; ">Leave blank if you don't want to change your avatar</small>
                                        </div>
                                        <div class="col-5 d-inline">
                                            <button type="submit" class="btn btn-success top-0"> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- /table -->
@endsection