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
                            <a href="{{ route('admin.fakultas-pengajuan') }}">
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
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ route('admin.fakultas-persetujuan') }}">
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
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.fakultas-realisasi') }}">
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
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.fakultas-pelaporan') }}">
                                <div class="card card-flush h-xl-80" style="background-color: #cde7fde8">
                                    <!--begin::Header-->
                                    <div class="card-title align-items-start flex-column flex-nowrap pt-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-4 text-gray-8000">Pelaporan:</span>
                                            <span class="text-danger fs-4 ms-2">{{ $jumlahPelaporan }}</span>
                                        </h3>
                                    </div>
                                </div>
                            </a>
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
                                        <h3 class="card-title text-gray-800 fw-bolder">Grafik Dashboard</h3>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pt-0 pb-1 px-0">
                                        <canvas id="dashboardChart" style="height: 300px"></canvas>
                                    </div>
                                    <!--end::Card body-->


                                </div>
                                <!--end::Chart widget 26-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card-footer">
                Footer
            </div> --}}
        </div>
    </div>
    <!-- Pemanggilan script jQuery, Select2, dan Chart.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Add these lines to include Chart.js -->


    <script>
        $(document).ready(function() {
            // Inisialisasi Select2 untuk elemen dengan class 'select2'
            $('.select2').select2();

            // Get the data from your PHP variables
            var dataBulanan = @json($dataBulanan);

            // Log data untuk memeriksanya di konsol
            console.log(dataBulanan);

            // Inisialisasi Chart.js setelah data siap
            var ctx = document.getElementById('dashboardChart').getContext('2d');
            var dashboardChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: Object.keys(dataBulanan),
                    datasets: [{
                            label: 'Pengajuan',
                            data: Object.values(dataBulanan).map(data => data.pengajuan),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                        },
                        {
                            label: 'Persetujuan',
                            data: Object.values(dataBulanan).map(data => data.persetujuan),
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                        },
                        {
                            label: 'Realisasi',
                            data: Object.values(dataBulanan).map(data => data.realisasi),
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            borderColor: 'rgba(255, 205, 86, 1)',
                            borderWidth: 1,
                        },
                        {
                            label: 'Pelaporan',
                            data: Object.values(dataBulanan).map(data => data.pelaporan),
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });

        });
    </script>
@endsection
