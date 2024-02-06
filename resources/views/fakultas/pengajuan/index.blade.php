@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">Layanan Pengajuan Anggaran - Periode Tahun 2024</span>
                    <div class="card-toolbar">
                        <a href="{{ route('fakultas-pengajuan-create') }}" class="btn btn-sm btn-success">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z"
                                        fill="currentColor" />
                                    <path
                                        d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z"
                                        fill="currentColor" />
                                </svg>
                            </span>Tambah
                        </a>
                        <!-- Modal Code Here -->
                    </div>
                </h3>
            </div>

            <div class="card-body py-3">
                <!-- Move the success and error alerts here -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-4" style="border: 1px solid #dee2e6;">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th style="border: 1px solid #dee2e6; text-align:center">No.</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Judul Kegiatan</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Total Anggaran</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Waktu Pelaksanaan</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Kriteria</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Status</th>
                                <th style="border: 1px solid #dee2e6;text-align:center"class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengajuans as $pengajuan)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;text-align:center">{{ $loop->iteration }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $pengajuan->judul_kegiatan }}</td>
                                    <td style="border: 1px solid #dee2e6;">Rp.
                                        {{ number_format($pengajuan->total_anggaran) }}</td>
                                    <td style="border: 1px solid #dee2e6;">
                                        {{ \Carbon\Carbon::parse($pengajuan->waktu_pelaksanaan)->format('d/m/Y') }}</td>
                                    <td style="border: 1px solid #dee2e6;text-align:center">{{ $pengajuan->kriteria }}</td>
                                    <td
                                        style="border: 1px solid #dee2e6; text-align: center; @if (Str::lower($pengajuan->status) === 'ditolak') color: red; @endif">
                                        {{ $pengajuan->status }}
                                    </td>

                                    <td style="border: 1px solid #dee2e6;" class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#showModal{{ $pengajuan->id }}">
                                            <i class="bi bi-info-circle"></i>
                                        </button>

                                        <a href="{{ route('fakultas-pengajuan.edit', ['id' => $pengajuan->id]) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="{{ route('fakultas-pengajuan.destroy', ['id' => $pengajuan->id]) }}"
                                            class="btn btn-sm btn-danger delete-category" id="delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
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
                                                <p>Judul Kegiatan: {{ $pengajuan->judul_kegiatan }}</p>
                                                <p>Total Anggaran: Rp. {{ number_format($pengajuan->total_anggaran) }}</p>
                                                <p>Waktu Pelaksanaan: {{ $pengajuan->waktu_pelaksanaan }}</p>
                                                <p>Kriteria: {{ $pengajuan->kriteria }}</p>
                                                <p>Status: {{ $pengajuan->status }}</p>
                                                <!-- Tambahan informasi sesuai kebutuhan -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <ul class="pagination pagination-circle pagination-outline justify-content-end">
                    {{ $pengajuans->links('pagination::bootstrap-4') }}
                </ul>
            </div>
        </div>
    </div>
@endsection
