@extends('layout.main')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-8">Layanan Pelaporan Anggaran - Periode Tahun 2024 -
                            Seminar Nasional</span>
                        <a class="btn btn-sm btn-light-primary" style="width: 940px; text-align: left;">
                            <div style="margin-bottom: 5px;">
                                <i class="fas fa-exclamation-circle"></i> Informasi
                            </div>
                            <div>
                                Dana Kegiatan: Disetujui Rp. 8.000.000 | Direncanakan Rp. 10.000.000
                            </div>
                        </a>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z"
                                            fill="currentColor" />
                                        <path
                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Tambah
                            </a>

                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Tambah Data Layanan Pelaporan Anggaran</h3>

                                            <!-- Close button -->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                            <!-- End Close button -->
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('fakultas-pelaporan.store') }}" method="POST">
                                                @csrf
                                                <!-- item -->
                                                <div class="mb-3">
                                                    <label for="item" class="form-label">Item</label>
                                                    <input type="text" class="form-control" id="item" name="item"
                                                        placeholder="Masukkan Item">
                                                </div>

                                                <!-- Satuan -->
                                                <div class="mb-3">
                                                    <label for="satuan" class="form-label">Satuan</label>
                                                    <input type="text" class="form-control" id="satuan" name="satuan"
                                                        placeholder="Masukkan Satuan">
                                                </div>

                                                <!-- Volume -->
                                                <div class="mb-3">
                                                    <label for="volume" class="form-label">Volume</label>
                                                    <input type="text" class="form-control" id="volume" name="volume"
                                                        placeholder="Masukkan Volume">
                                                </div>

                                                <!-- Harga Satuan -->
                                                <div class="mb-3">
                                                    <label for="total" class="form-label">Harga Satuan</label>
                                                    <input type="text" class="form-control" id="hargasatuan"
                                                        name="hargasatuan" placeholder="Masukkan Harga Satuan">
                                                </div>

                                                <!-- Total -->
                                                <div class="mb-3">
                                                    <label for="total" class="form-label">Total</label>
                                                    <input type="text" class="form-control" id="total" name="total"
                                                        placeholder="Masukkan Total">
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
                            </div>


                        </div>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <form action="{{ route('fakultas-pelaporan-seminar') }}" method="GET">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th>No</th>
                                        <th>Item</th>
                                        <th>Satuan</th>
                                        <th>Volume</th>
                                        <th>Harga Satuan</th>
                                        <th>Total</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->item }}</td>
                                            <td>{{ $d->satuan }}</td>
                                            <td>{{ $d->volume }}</td>
                                            <td>{{ $d->harga_satuan }}</td>
                                            <td>{{ $d->total }}</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash bi-1x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-toolbar text-end">
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="#">
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil122.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M14 2H20C21.1 2 22 2.9 22 4V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V4C2 2.9 2.9 2 4 2H10L12 4H20C21.1 4 22 4.9 22 6V16H20V6H18V16H16V6H14V16H12V6H10V16H8V6H6V16H4V4H14V2ZM14 16H16V18H14V16ZM12 16H14V18H12V16ZM10 16H12V18H10V16ZM8 16H10V18H8V16Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Simpan
                                </a>
                            </div>
                        </div>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
        </div>
        <!--end::Card-->
    </div>
@endsection
