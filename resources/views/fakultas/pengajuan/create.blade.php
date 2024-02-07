@extends('layout.main')
@section('content')

    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">Tambah Pengajuan Anggaran</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!-- Add your form for creating a new Pengajuan -->
                <form action="{{ route('fakultas-pengajuan.store') }}" method="post">
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

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('fakultas-pengajuan.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
