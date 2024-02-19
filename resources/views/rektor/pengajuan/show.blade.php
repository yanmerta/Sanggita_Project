<!-- resources/views/rektor/pengajuan/show.blade.php -->

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
                <p>Unit/Fakultas: {{ $pengajuan->unit_fakultas }}</p>
                <p>Judul Kegiatan: {{ $pengajuan->judul_kegiatan }}</p>
                <p>Total Anggaran: Rp. {{ number_format($pengajuan->total_anggaran) }}</p>
                <p>Waktu Pelaksanaan: {{ $pengajuan->waktu_pelaksanaan }}</p>
                <p>Kriteria: {{ $pengajuan->kriteria }}</p>
                <p>Status: {{ $pengajuan->status }}</p>
                <!-- ... other details -->

                <!-- Approval/Rejection form -->
                <form action="{{ route('admin.rektor.pengajuan.approve', $pengajuan->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Approve</button>
                </form>

                <form action="{{ route('admin.rektor.pengajuan.reject', $pengajuan->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </div>
        </div>
    </div>
@endsection
