@extends('layout.main')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">Layanan Pengajuan Anggaran - Periode Tahun 2024</span>
                    <div class="card-toolbar">
                        <a href="{{ route('fakultas-pengajuan.create') }}" class="btn btn-sm btn-success">
                            <span class="svg-icon svg-icon-2">
                                <i class="bi bi-plus"></i>
                            </span>Tambah
                        </a>
                        {{-- <div class="modal fade" tabindex="-1" id="kt_modal_1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Tambah Data Layanan Pengajuan</h3>
                                        <!-- Close button -->
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!-- End Close button -->
                                    </div>

                                    <div class="modal-body">
                                        <form action="#" method="POST">
                                            @csrf
                                            <!-- Judul Kegiatan -->
                                            <div class="mb-3">
                                                <label for="judulKegiatan" class="form-label">Judul Kegiatan</label>
                                                <input type="text" class="form-control" id="judulKegiatan"
                                                    name="judulKegiatan" placeholder="Masukkan Judul Kegiatan">
                                            </div>

                                            <!-- Total Anggaran -->
                                            <div class="mb-3">
                                                <label for="totalAnggaran" class="form-label">Total Anggaran</label>
                                                <input type="number" class="form-control" id="totalAnggaran"
                                                    name="totalAnggaran" placeholder="Masukkan Total Anggaran">
                                            </div>

                                            <!-- Waktu Pelaksanaan -->
                                            <div class="mb-3">
                                                <label for="waktuPelaksanaan" class="form-label">Waktu
                                                    Pelaksanaan</label>
                                                <input type="datetime-local" class="form-control" id="waktuPelaksanaan"
                                                    name="waktuPelaksanaan" placeholder="Masukkan Waktu Pelaksanaan">
                                            </div>

                                            <!-- Kriteria -->
                                            <div class="mb-3">
                                                <label for="kriteria" class="form-label">Kriteria</label>
                                                <select class="form-select" id="kriteria" name="kriteria"
                                                    aria-label="Pilih Kriteria">
                                                    <option selected disabled>Pilih Kriteria</option>
                                                    <option value="urgent">Urgent</option>
                                                    <option value="biasa">Biasa</option>
                                                </select>
                                            </div>

                                            <!-- Status -->
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" id="status" name="status"
                                                    aria-label="Pilih Status">
                                                    <option selected disabled>Pilih Status</option>
                                                    <option value="diusulkan">Diusulkan</option>
                                                    <option value="ditolak">Ditolak</option>
                                                </select>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th>No</th>
                                <th>Judul Kegiatan</th>
                                <th>Total Anggaran</th>
                                <th>Waktu Pelaksanaan</th>
                                <th>Kriteria</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->judul_kegiatan }}</td>
                                    <td>Rp. {{ number_format($d->total_anggaran) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($d->waktu_pelaksanaan)->format('d/m/Y') }}</td>
                                    <td>{{ $d->kriteria }}</td>
                                    <td @if ($d->status === 'Ditolak') style="color: red;" @endif>
                                        {{ $d->status }}
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#showModal{{ $d->id }}">
                                            <i class="bi bi-exclamation-circle"></i>
                                        </button>

                                        <a href="{{ route('fakultas-pengajuan.edit', ['id' => $d->id]) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        {{-- <a href="{{ url('admin/category/delete/'.$value->id) }}" class="btn btn-sm btn-danger delete-category" id="delete">
                                            <i class="fas fa-trash-alt"></i>
                                          </a> --}}

                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash bi-1x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="showModal{{ $d->id }}" tabindex="-1"
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
                                                <p>Judul Kegiatan: {{ $d->judul_kegiatan }}</p>
                                                <p>Total Anggaran: Rp. {{ number_format($d->total_anggaran) }}</p>
                                                <p>Waktu Pelaksanaan: {{ $d->waktu_pelaksanaan }}</p>
                                                <p>Kriteria: {{ $d->kriteria }}</p>
                                                <p>Status: {{ $d->status }}</p>
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
                {{-- <ul class="pagination pagination-circle pagination-outline justify-content-end">
                    {{ $pengajuans->links('pagination::bootstrap-4') }}
                </ul> --}}
            </div>
        </div>
    </div>
@endsection
