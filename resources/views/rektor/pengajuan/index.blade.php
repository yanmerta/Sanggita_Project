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
                    <table class="table align-middle gs-0 gy-4" style="border: 1px solid #dee2e6;">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th style="border: 1px solid #dee2e6; text-align:center">No.</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Unit/Fakultas</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Judul Kegiatan</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Total Anggaran</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Waktu Pelaksanaan</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Kriteria</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Status</th>
                                <th style="border: 1px solid #dee2e6; text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengajuans as $pengajuan)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;text-align:center">{{ $loop->iteration }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $pengajuan->unit_fakultas }}
                                    </td>
                                    <td style="border: 1px solid #dee2e6;">{{ $pengajuan->judul_kegiatan }}
                                    </td>
                                    <td style="border: 1px solid #dee2e6;">Rp.
                                        {{ number_format($pengajuan->total_anggaran) }}</td>
                                    <td style="border: 1px solid #dee2e6; text-align:center">
                                        {{ $pengajuan->waktu_pelaksanaan }}</td>
                                    <td style="border: 1px solid #dee2e6;text-align:center">{{ $pengajuan->kriteria }}</td>
                                    <td
                                        style="border: 1px solid #dee2e6; text-align: center; padding: 5px; color: @php echo strtolower($pengajuan->status) === 'disetujui' ? 'green' : (strtolower($pengajuan->status) === 'ditolak' ? 'red' : 'black'); @endphp">
                                        {{ $pengajuan->status }}
                                    </td>


                                    <td style="border: 1px solid #dee2e6;" class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal"
                                                data-bs-target="#showModal{{ $pengajuan->id }}">
                                                <i class="bi bi-info-circle-fill"></i>
                                            </button>

                                            <a href="{{ route('admin.rektor.pengajuan.show', $pengajuan->id) }}"
                                                class="btn btn-primary btn-sm m-1">
                                                <i class="bi bi-file-earmark-fill"></i>
                                            </a>
                                        </div>
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
                @if ($pengajuans->isEmpty())
                    <div class="text-center" style="font-weight:">
                        <h6>No data available in table</h6>
                    </div>
                @endif
                <ul class="pagination pagination-circle pagination-outline justify-content-end">
                    {{ $pengajuans->links('pagination::bootstrap-4') }}
                </ul>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
    </div>
@endsection
