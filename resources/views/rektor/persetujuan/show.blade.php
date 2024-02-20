@extends('layout.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Detail Persetujuan Kegiatan</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <!-- Display details for the specific approval request -->
                <p>Unit / Fakultas: {{ $pengajuan->unit_fakultas }}</p>
                <!-- Add other details as needed -->
            </div>
        </div>
    </div>
@endsection
