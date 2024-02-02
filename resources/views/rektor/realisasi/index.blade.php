@extends('layout.main')
@section('content')

<div id="kt_content_container" class="container-xxl">
    <!--begin::Card-->
    <div class="card">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Layanan Realisasi Anggaran - Periode Tahun 2024</span>
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
                                <td>1</td>
                                <td>Lembaga Penjamin Mutu</td>
                                <td>Pengadaan ATK</td>
                                <td>Rp. 15.000.000</td>
                                <td>31/1/2024</td>
                                <td>Urgent</td>
                                <td>Direalisasikan sebesar Rp.8.000.000</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-success btn-sm">
                                        <i class="bi bi-exclamation-circle"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="bi bi-file-earmark-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Fakultas Teknologi Informasi dan Sains</td>
                                <td>Pengadaan ATK</td>
                                <td>Rp. 15.000.000</td>
                                <td>31/1/2024</td>
                                <td>Urgent</td>
                                <td>Direalisasikan sebesar Rp.10.000.000</td>
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
