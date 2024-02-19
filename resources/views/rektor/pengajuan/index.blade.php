@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Layanan Pengajuan Anggaran - Periode Tahun 2024 - Lembaga
                        Penjaminan Mutu</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th>No</th>
                                <th>Unit/Fakultas</th>
                                <th>Judul Kegiatan</th>
                                <th>Total Anggaran</th>
                                <th>Waktu Pelaksanaan</th>
                                <th>Kriteria</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengajuans as $pengajuan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pengajuan->unit_fakultas }}</td>
                                    <td>{{ $pengajuan->judul_kegiatan }}</td>
                                    <td>Rp. {{ number_format($pengajuan->total_anggaran) }}</td>
                                    <td>{{ $pengajuan->waktu_pelaksanaan }}</td>
                                    <td>{{ $pengajuan->kriteria }}</td>
                                    <td>{{ $pengajuan->status }}</td>
                                    <td class="text-end">
                                        <!-- Tambahkan tombol aksi sesuai kebutuhan -->
                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#showModal{{ $pengajuan->id }}">
                                            <i class="bi bi-info-circle-fill"></i>
                                        </button>

                                        <a href="{{ route('admin.rektor.pengajuan.show', $pengajuan->id) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="bi bi-file-earmark-fill"></i>
                                        </a>
                                    </td>

                                </tr>
                                <div class="modal fade" id="showModal{{ $pengajuan->id }}" tabindex="-1"
                                    aria-labelledby="showModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="showModalLabel">Detail Pengajuan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Isi dengan informasi detail pengajuan, misalnya -->
                                                <p>{{ __('users.judul_kegiatan') }}: {{ $pengajuan->judul_kegiatan }}</p>
                                                <p>Total Anggaran: Rp. {{ number_format($pengajuan->total_anggaran) }}
                                                </p>
                                                <p>Waktu Pelaksanaan: {{ $pengajuan->waktu_pelaksanaan }}</p>
                                                <p>Kriteria: {{ $pengajuan->kriteria }}</p>
                                                <p>Status: {{ $pengajuan->status }}</p>
                                                <!-- Tambahan informasi sesuai kebutuhan -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
    </div>
@endsection
