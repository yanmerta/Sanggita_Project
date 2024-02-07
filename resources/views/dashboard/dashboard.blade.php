@extends('layout.main')
@section('content')
    <div id="kt_content_container" class="container">
        <div class="card shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
            </div>
            <div class="card-body">
                <div id="kt_content_container" class="container-xxl">
                    <div class="row gy-5 g-xl-10">
                        <div class="col-md-3">
                            <div class="card card-flush h-xl-80" style="background-color: #cde7fde8">
                                <!--begin::Header-->
                                <div class="card-title align-items-start flex-column flex-nowrap pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-4 text-gray-800">Pengajuan:</span>
                                        <span class="text-danger fs-4 ms-2">{{ $jumlahPengajuan }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-flush h-xl-80" style="background-color: #cde7fde8">
                                <!--begin::Header-->
                                <div class="card-title align-items-start flex-column flex-nowrap pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-4 text-gray-800">Persetujuan:</span>
                                        <span class="text-danger fs-4 ms-2">2</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-flush h-xl-80" style="background-color: #cde7fde8">
                                <!--begin::Header-->
                                <div class="card-title align-items-start flex-column flex-nowrap pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-4 text-gray-800">Realisasi:</span>
                                        <span class="text-danger fs-4 ms-2">2</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-flush h-xl-80" style="background-color: #cde7fde8">
                                <!--begin::Header-->
                                <div class="card-title align-items-start flex-column flex-nowrap pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-4 text-gray-8000">Pelaporan:</span>
                                        <span class="text-danger fs-4 ms-2">2</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                            <!--begin::Col-->
                            <div class="col-xxl-8">
                                <!--begin::Chart widget 26-->
                                <div class="card card-flush overflow-hidden h-xl-100 bg-light-primary">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7 mb-2">
                                        <!--begin::Title-->
                                        {{-- <h3 class="card-title text-gray-800 fw-bolder">Transaction History</h3> --}}
                                        <a href="#" class="btn btn-dark flex-shrink-0 me-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">Pengajuan</a>
                                        <a href="#" class="btn btn-dark flex-shrink-0 me-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">Persetujuan</a>
                                        <a href="#" class="btn btn-dark flex-shrink-0 me-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">Realisasi</a>
                                        <a href="#" class="btn btn-dark flex-shrink-0 me-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">Pelaporan</a>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pt-0 pb-1 px-0">
                                        <div id="kt_charts_widget_26" class="min-h-auto ps-4 pe-6"
                                            data-kt-chart-info="Transactions" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 26-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer">
                Footer
            </div> --}}
            </div>
        </div>
    @endsection
