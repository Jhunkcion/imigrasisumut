@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Data Pengunjung</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>IP Address</th>
                <th>User Agent</th>
                <th>URL</th>
                <th>Waktu</th>
                <th>Device</th>
                <th>Platform</th>
                <th>Browser</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visitors as $visitor)
                <tr>
                    <td>{{ $visitor->ip_address }}</td>
                    <td>{{ $visitor->user_agent }}</td>
                    <td>{{ $visitor->url }}</td>
                    <td>{{ $visitor->visited_at }}</td>
                    <td>{{ $visitor->device }}</td>
                    <td>{{ $visitor->platform }}</td>
                    <td>{{ $visitor->browser }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data pengunjung.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
