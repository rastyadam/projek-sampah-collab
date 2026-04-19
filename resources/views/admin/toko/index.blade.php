@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-list"></i> Daftar Toko ({{ $toko->total() }})</h2>
</div>

<!-- FILTER -->
<div class="mb-4">
    <a href="{{ route('admin.toko.index') }}" class="btn btn-outline-primary btn-sm">Semua</a>
    <a href="{{ route('admin.toko.index', ['status' => 'pending']) }}" class="btn btn-warning btn-sm">Pending</a>
    <a href="{{ route('admin.toko.index', ['status' => 'approved']) }}" class="btn btn-success btn-sm">Approved</a>
    <a href="{{ route('admin.toko.index', ['status' => 'rejected']) }}" class="btn btn-danger btn-sm">Rejected</a>
</div>

<!-- TABEL -->
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Toko</th>
                <th>Pemilik</th>
                <th>NIK</th>
                <th>Status</th>
                <th>Tgl Daftar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($toko as $index => $item)
            <tr>
                <td>{{ $toko->firstItem() + $index }}</td>
                <td><strong>{{ $item->nama_toko }}</strong></td>
                <td>{{ $item->pemilik_nama }}</td>
                <td>{{ $item->pemilik_nik }}</td>
                <td>
                    @switch($item->status)
                        @case('pending')
                            <span class="badge bg-warning">⏳ Pending</span>
                            @break
                        @case('approved')
                            <span class="badge bg-success">✅ Approved</span>
                            @break
                        @case('rejected')
                            <span class="badge bg-danger">❌ Rejected</span>
                            @break
                    @endswitch
                </td>
                <td>{{ $item->created_at->format('d/m H:i') }}</td>
                <td>
                    <a href="{{ route('admin.toko.show', $item) }}" class="btn btn-sm btn-info">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" class="text-center py-4">📭 Belum ada pendaftaran</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $toko->appends(request()->query())->links() }}
@endsection