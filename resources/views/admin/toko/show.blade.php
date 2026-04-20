@extends('admin.layouts.app')

@section('content')
<div class="row">
    <!-- INFO TOKO -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $toko->nama_toko }}</h5>
                <span class="badge fs-6 bg-{{ $toko->status == 'pending' ? 'warning' : ($toko->status == 'approved' ? 'success' : 'danger') }}">
                    {{ ucfirst($toko->status) }}
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6"><strong>Pemilik:</strong> {{ $toko->pemilik_nama }}</div>
                    <div class="col-md-6"><strong>NIK:</strong> {{ $toko->pemilik_nik }}</div>
                    <div class="col-md-6"><strong>HP:</strong> {{ $toko->pemilik_no_hp }}</div>
                    <div class="col-md-6"><strong>Status:</strong> {{ ucfirst($toko->status) }}</div>
                    <div class="col-12"><strong>Alamat:</strong> {{ $toko->alamat }}</div>
                </div>

                @if($toko->alasan_reject)
                <div class="alert alert-danger mt-3">
                    <strong>Alasan Penolakan:</strong><br>
                    {{ $toko->alasan_reject }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- AKSI & FOTO -->
    <div class="col-lg-4">
        <!-- FOTO -->
        <div class="card">
            <div class="card-header">📸 Dokumen</div>
            <div class="card-body text-center p-2">
                @if($toko->foto_ktp)
                    <img src="{{ Storage::url($toko->foto_ktp) }}" class="img-fluid mb-2 rounded" style="max-height: 150px;">
                    <small>Foto KTP</small>
                @endif
                @if($toko->foto_selfie)
                    <img src="{{ Storage::url($toko->foto_selfie) }}" class="img-fluid rounded" style="max-height: 150px;">
                    <small>Foto Selfie</small>
                @endif
            </div>
        </div>

        <!-- BUTTON AKSI -->
        @if($toko->status == 'pending')
        <div class="card mt-3">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.toko.approve', $toko) }}" class="mb-2">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">
                        <i class="fas fa-check"></i> Setujui Toko
                    </button>
                </form>

                <form method="POST" action="{{ route('admin.toko.reject', $toko) }}">
                    @csrf
                    <textarea name="alasan" class="form-control mb-2" placeholder="Alasan penolakan..." required></textarea>
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="fas fa-times"></i> Tolak Toko
                    </button>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection