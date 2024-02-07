@extends('layout.main')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
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
                        <a href="{{ route('fakultas-pelaporan-create') }}" class="btn btn-sm btn-success">
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
                        {{-- <div class="modal fade" tabindex="-1" id="kt_modal_1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Tambah Data Layanan Pelaporan Anggaran</h3>

                                        <!-- Close button -->
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!-- End Close button -->
                                    </div>

                                    <div class="modal-body">
                                        <form>
                                            <!-- item -->
                                            <div class="mb-3">
                                                <label for="item" class="form-label">Item</label>
                                                <input type="text" class="form-control" id="item" placeholder="Masukkan Item">
                                            </div>

                                            <!-- Satuan -->
                                            <div class="mb-3">
                                                <label for="satuan" class="form-label">Satuan</label>
                                                <input type="number" class="form-control" id="satuan" placeholder="Masukkan Satuan">
                                            </div>

                                            <!-- Volume -->
                                            <div class="mb-3">
                                                <label for="volume" class="form-label">Volume</label>
                                                <input type="text" class="form-control" id="volume" placeholder="Masukkan Volume">
                                            </div>

                                            <!-- Harga Satuan -->
                                            <div class="mb-3">
                                                <label for="total" class="form-label">Harga Satuan</label>
                                                <input type="text" class="form-control" id="hargasatuan"
                                                    placeholder="Masukkan Harga Satuan">
                                            </div>

                                            <!-- Total -->
                                            <div class="mb-3">
                                                <label for="total" class="form-label">Total</label>
                                                <input type="text" class="form-control" id="total"
                                                    placeholder="Masukkan Harga Total">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </h3>
            </div>
            <!--begin::Body-->
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
                                <th style="border: 1px solid #dee2e6;text-align:center">Item</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Satuan</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Volume</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Harga Satuan</th>
                                <th style="border: 1px solid #dee2e6;text-align:center">Total</th>
                                <th style="border: 1px solid #dee2e6;text-align:center"class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelaporans as $pelaporan)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;text-align:center">{{ $loop->iteration }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $pelaporan->item }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $pelaporan->satuan }}</td>
                                    <td style="border: 1px solid #dee2e6;">{{ $pelaporan->volume }}</td>
                                    <td style="border: 1px solid #dee2e6;">Rp.
                                        {{ number_format($pelaporan->harga_satuan) }}</td>
                                    <td style="border: 1px solid #dee2e6;">Rp.
                                        {{ number_format($pelaporan->total) }}</td>

                                    <td style="border: 1px solid #dee2e6;" class="text-center">
                                        <div class="d-flex justify-content-center">
                                            {{-- <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal"
                                                data-bs-target="#showModal{{ $pelaporan->id }}">
                                                <i class="bi bi-info-circle"></i>
                                            </button> --}}

                                            {{-- <a href="{{ route('fakultas-pengajuan.edit', $pelaporan->id) }}"
                                                class="btn btn-warning btn-sm m-1">
                                                <i class="fas fa-edit"></i>
                                            </a> --}}

                                            <form id="deleteForm"
                                                action="{{ route('fakultas-pelaporan.destroy', $pelaporan->id) }}"
                                                method="POST" class="m-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm" id="delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                                <!-- Modal -->
                                {{-- <div class="modal fade" id="showModal{{ $pelaporan->id }}" tabindex="-1"
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
                                                <p>Total Anggaran: Rp. {{ number_format($pengajuan->total_anggaran) }}
                                                </p>
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
                                </div> --}}
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-toolbar text-end">
                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="#">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil122.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M14 2H20C21.1 2 22 2.9 22 4V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V4C2 2.9 2.9 2 4 2H10L12 4H20C21.1 4 22 4.9 22 6V16H20V6H18V16H16V6H14V16H12V6H10V16H8V6H6V16H4V4H14V2ZM14 16H16V18H14V16ZM12 16H14V18H12V16ZM10 16H12V18H10V16ZM8 16H10V18H8V16Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Simpan
                        </a>
                    </div>
                </div>
                <ul class="pagination pagination-circle pagination-outline justify-content-end">
                    {{ $pelaporans->links('pagination::bootstrap-4') }}
                </ul>
            </div>
        </div>
    </div>
@endsection
