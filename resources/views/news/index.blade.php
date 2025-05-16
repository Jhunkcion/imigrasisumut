@extends('layouts.admin')

@section('title', 'List Berita')

@section('breadcrumbs', 'Berita')

@section('content')
    <!-- Widgets -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="my-3 text-right">
                        <a href="{{ route('news.create') }}" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead class="text-light" style="background-color:#33b751 !important">
                            <tr class="text-center">
                                <th style="width:10px">No</th>
                                <th>Judul</th>
                                <th>Konten</th> <!-- Kolom baru -->
                                <th>Tanggal Dibuat</th>
                                <th>Gambar</th>
                                <th style="width:165px">Aksi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beritas as $index => $berita)
                                <tr class="text-center">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($berita->konten, 100) }}</td>
                                    <!-- Konten dipotong 100 karakter -->
                                    <td>{{ \Carbon\Carbon::parse($berita->created_at)->format('d M Y') }}</td>
                                    <td>
                                        @if($berita->gambar)
                                            <img src="{{ asset('storage/' . $berita->gambar) }}" width="100px">
                                        @endif
                                    </td>
                                    <td>
                                        @if($berita->status == 'draft')
                                            <span class="badge bg-secondary">Draft</span>
                                        @else
                                            <span class="badge bg-success">Publish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('news.edit', $berita->id) }}"
                                            class="btn btn-sm btn-warning text-light">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="deleteConfirm('{{ $berita->id }}', '{{ $berita->judul}}')"
                                            data-target="#modalDelete" data-toggle="modal">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                        @if ($berita->status === 'draft')
                                            <form action="{{ route('news.publish', $berita->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit">Publish</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-inline">Delete Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="message"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form action="" id="url" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Delete -->

@endsection

@section('script')
    <script>
        function deleteConfirm(id, name) {
            var url = '{{ route("news.destroy", ":id") }}';
            url = url.replace(':id', id);
            document.getElementById("url").setAttribute("action", url);
            document.getElementById('message').innerHTML = "Apakah Anda yakin ingin menghapus berita <strong>" + name + "</strong> ?";
            $('#modalDelete').modal();
        }
    </script>
@endsection