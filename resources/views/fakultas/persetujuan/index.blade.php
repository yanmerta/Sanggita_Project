@extends('layout.main')
@section('content')
<div id="kt_content_container" class="container-xxl">
    <!--begin::Card-->
    <div class="card">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Layanan Persetujuan</span>
                    <div class="card-toolbar">
                    </div>
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
                                <td>Pengadaan ATK</td>
                                <td>Rp. 15.000.000</td>
                                <td>31/1/2024</td>
                                <td>Urgent</td>
                                <td>Usulan direalisasikan sebesar Rp.7.000.000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm">
                                        <i class="bi bi-file-earmark-fill bi-1x"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pengabdian</td>
                                <td>Rp. 7.000.000</td>
                                <td>14/2/2024</td>
                                <td>Urgent</td>
                                <td>Usulan direalisasikan sebesar Rp.7.000.000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm">
                                        <i class="bi bi-file-earmark-fill bi-1x"></i>
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
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
@endsection
