@extends('layouts.admin')

@section('title', 'Daftar Pengumuman')

@section('breadcrumbs', 'Pengumuman')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="my-3 text-right">
                        <a href="{{ route('announcements.create') }}" class="btn btn-sm btn-warning">
                            <i class="fa fa-plus"></i> Tambah Pengumuman
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
                        <thead class="text-light" style="background-color:#06213d !important">
                            <tr class="text-center">
                                <th style="width:10px">No</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($announcements as $index => $announcement)
                                <tr class="text-center">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $announcement->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($announcement->content, 100) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($announcement->tanggal)->translatedFormat('d F Y') }}</td>
                                    <td>
                                        <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-sm btn-warning text-light">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="deleteConfirm('{{ $announcement->id }}', '{{ $announcement->title }}')"
                                            data-target="#modalDelete" data-toggle="modal">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="message"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="" id="url" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteConfirm(id, name) {
            var url = '{{ route("announcements.destroy", ":id") }}';
            url = url.replace(':id', id);
            document.getElementById("url").setAttribute("action", url);
            document.getElementById('message').innerHTML = "Apakah Anda yakin ingin menghapus pengumuman <strong>" + name + "</strong>?";
            $('#modalDelete').modal();
        }
    </script>
@endsection
