@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Detail Pengajuan</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!-- Display Pengajuan details here -->
                <div class="mb-3">
                    <strong>Unit/Fakultas:</strong> {{ $pengajuan->unit_fakultas }}
                </div>
                <div class="mb-3">
                    <strong>Judul Kegiatan:</strong> {{ $pengajuan->judul_kegiatan }}
                </div>
                <div class="mb-3">
                    <strong>Total Anggaran:</strong> Rp. {{ number_format($pengajuan->total_anggaran) }}
                </div>
                <div class="mb-3">
                    <strong>Waktu Pelaksanaan:</strong> {{ $pengajuan->waktu_pelaksanaan }}
                </div>
                <div class="mb-3">
                    <strong>Kriteria:</strong> {{ $pengajuan->kriteria }}
                </div>
                <div class="mb-3">
                    <strong>Status:</strong> {{ $pengajuan->status }}
                </div>
                <!-- ... other details -->

                <!-- Approval/Rejection form with confirmation -->
                <form action="{{ route('admin.rektor.pengajuan.approve', $pengajuan->id) }}" method="post"
                    onsubmit="return confirm('Yakin Anda ingin menyetujui pengajuan ini?')">
                    @csrf
                    <button type="submit" class="btn btn-success">Approve</button>
                </form>

                <form action="{{ route('admin.rektor.pengajuan.reject', $pengajuan->id) }}" method="post"
                    onsubmit="return confirm('Yakin Anda ingin menolak pengajuan ini?')">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </div>
        </div>
    </div>
@endsection
