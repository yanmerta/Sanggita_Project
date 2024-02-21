@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Detail Persetujuan Kegiatan</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!-- Display details for the specific approval request -->
                <div class="border p-3 mb-3">
                    <p>Unit / Fakultas: {{ $pengajuan->unit_fakultas }}</p>
                    <p>Judul Kegiatan: {{ $pengajuan->judul_kegiatan }}</p>
                    <p>Total Anggaran: {{ $pengajuan->total_anggaran }}</p>
                    <p>Waktu Pelaksanaan: {{ $pengajuan->waktu_pelaksanaan }}</p>
                    <p>Kriteria: {{ $pengajuan->kriteria }}</p>
                    <p>Status: {{ $pengajuan->status }}</p>

                    <!-- Show approval status -->
                    @if ($pengajuan->status == 'disetujui')
                        <div class="alert alert-success" role="alert">
                            Kegiatan ini telah disetujui.
                        </div>
                    @elseif($pengajuan->status == 'ditolak')
                        <div class="alert alert-danger" role="alert">
                            Kegiatan ini ditolak.
                        </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            Kegiatan ini masih menunggu persetujuan.
                        </div>
                    @endif
                </div>
                <!-- Add other details as needed -->
            </div>
        </div>
    </div>
@endsection
