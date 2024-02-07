@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">Tambah Pelaporan Anggaran Seminar</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!-- Add your form for creating a new Pengajuan -->
                <form action="{{ route('admin.fakultas-pelaporan-store') }}" method="post">
                    @csrf

                    <!-- Item -->
                    <div class="mb-3">
                        <label for="item" class="form-label">Item</label>
                        <input type="text" class="form-control" id="item" name="item" placeholder="Masukkan Item"
                            required>
                    </div>

                    <!-- Satuan -->
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" name="satuan"
                            placeholder="Masukkan Satuan" required>
                    </div>

                    <!-- Volume -->
                    <div class="mb-3">
                        <label for="volume" class="form-label">Volume</label>
                        <input type="number" class="form-control" id="volume" name="volume"
                            placeholder="Masukkan Volume" required>
                    </div>

                    <!-- Harga Satuan -->
                    <div class="mb-3">
                        <label for="hargaSatuan" class="form-label">Harga Satuan</label>
                        <input type="number" class="form-control" id="hargaSatuan" name="harga_satuan"
                            placeholder="Masukkan Harga Satuan" required>
                    </div>

                    <!-- Total -->
                    <div class="mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input type="number" class="form-control" id="total" name="total"
                            placeholder="Masukkan Total" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.fakultas-pelaporan-seminar') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
