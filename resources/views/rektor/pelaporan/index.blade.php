@extends('layout.main')
@section('content')
<div id="kt_content_container" class="container-xxl">
    <div class="card">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Layanan Pelaporan Kegiatan - Periode Tahun 2024</span>
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
                                <th>Unit / Fakultas</th>
                                <th class="text-start">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lembaga Penjamin Mutu</td>
                                <td class="text-start">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <span style="display: inline-block;">Lihat</span>
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
</div>
@endsection
