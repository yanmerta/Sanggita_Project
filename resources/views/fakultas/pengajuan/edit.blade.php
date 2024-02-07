@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-8">Edit Pengajuan Anggaran</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!-- Add your form for editing Pengajuan -->
                <form action="{{ route('admin.fakultas-pengajuan.update', ['id' => $pengajuan->id]) }}" method="post">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating -->

                    <!-- Judul Kegiatan -->
                    <div class="mb-3">
                        <label for="judulKegiatan" class="form-label">Judul Kegiatan</label>
                        <input type="text" class="form-control" id="judulKegiatan" name="judul_kegiatan"
                            placeholder="Masukkan Judul Kegiatan" value="{{ $pengajuan->judul_kegiatan }}" required>
                    </div>

                    <!-- Total Anggaran -->
                    <div class="mb-3">
                        <label for="totalAnggaran" class="form-label">Total Anggaran</label>
                        <input type="number" class="form-control" id="totalAnggaran" name="total_anggaran"
                            placeholder="Masukkan Total Anggaran" value="{{ $pengajuan->total_anggaran }}" required>
                    </div>

                    <!-- Waktu Pelaksanaan -->
                    <div class="mb-3">
                        <label for="waktuPelaksanaan" class="form-label">Waktu Pelaksanaan</label>
                        <input type="date" class="form-control" id="waktuPelaksanaan" name="waktu_pelaksanaan"
                            value="{{ $pengajuan->waktu_pelaksanaan }}" required>
                    </div>

                    <!-- Kriteria -->
                    <div class="mb-3">
                        <label for="kriteria" class="form-label">Kriteria</label>
                        <select class="form-select" id="kriteria" name="kriteria" aria-label="Pilih Kriteria" required>
                            <option value="urgent" {{ $pengajuan->kriteria === 'urgent' ? 'selected' : '' }}>Urgent</option>
                            <option value="biasa" {{ $pengajuan->kriteria === 'biasa' ? 'selected' : '' }}>Biasa</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" aria-label="Pilih Status" required>
                            <option value="diusulkan" {{ $pengajuan->status === 'diusulkan' ? 'selected' : '' }}>Diusulkan
                            </option>
                            <option value="ditolak" {{ $pengajuan->status === 'ditolak' ? 'selected' : '' }}>Ditolak
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.fakultas-pengajuan') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
