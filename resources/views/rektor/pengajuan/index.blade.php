@extends('layout.main')
@section('content')

<div id="kt_content_container" class="container-xxl">
    <!--begin::Card-->
    <div class="card">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Layanan Pengajuan Anggaran - Periode Tahun 2024 - Lembaga Penjaminan Mutu</span>
                    {{-- <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light-success" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_1">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                        transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Tambah
                        </a>

                        <div class="modal fade" tabindex="-1" id="kt_modal_1">
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
                                        <form>
                                            <!-- Judul Kegiatan -->
                                            <div class="mb-3">
                                                <label for="judulKegiatan" class="form-label">Judul Kegiatan</label>
                                                <input type="text" class="form-control" id="judulKegiatan"
                                                    placeholder="Masukkan Judul Kegiatan">
                                            </div>

                                            <!-- Total Anggaran -->
                                            <div class="mb-3">
                                                <label for="totalAnggaran" class="form-label">Total Anggaran</label>
                                                <input type="number" class="form-control" id="totalAnggaran"
                                                    placeholder="Masukkan Total Anggaran">
                                            </div>

                                            <!-- Waktu Pelaksanaan -->
                                            <div class="mb-3">
                                                <label for="waktuPelaksanaan" class="form-label">Waktu Pelaksanaan</label>
                                                <input type="text" class="form-control" id="waktuPelaksanaan"
                                                    placeholder="Masukkan Waktu Pelaksanaan">
                                            </div>

                                            <!-- Kriteria -->
                                            <div class="mb-3">
                                                <label for="kriteria" class="form-label">Kriteria</label>
                                                <select class="form-select" id="kriteria" aria-label="Pilih Kriteria">
                                                    <option selected disabled>Pilih Kriteria</option>
                                                    <option value="urgent">Urgent</option>
                                                    <option value="biasa">Biasa</option>
                                                </select>
                                            </div>

                                            <!-- Status -->
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" id="status" aria-label="Pilih Status">
                                                    <option selected disabled>Pilih Status</option>
                                                    <option value="diusulkan">Diusulkan</option>
                                                    <option value="ditolak">Ditolak</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
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
                            <tr>
                                <td>1.</td>
                                <td>Lembaga Penjamin Mutu</td>
                                <td>Pengadaan ATK</td>
                                <td>Rp. 15.000.000</td>
                                <td>31/1/2024</td>
                                <td>Urgent</td>
                                <td>Diusulkan</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-success btn-sm">
                                        <i class="bi bi-exclamation-circle"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="bi bi-file-earmark-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
    </div>
    <!--end::Card-->
</div>

@endsection
