<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\RealisasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Persetujuan
Route::get('/fakultas-persetujuan', [
    PersetujuanController::class,
    'fakultas_persetujuan',
])->name('fakultas-persetujuan');
Route::get('/rektor-persetujuan', [
    PersetujuanController::class,
    'rektor_persetujuan',
])->name('rektor-persetujuan');

// Route::get('/fakultas-pengajuan', [PengajuanController::class, 'index'])->name('fakultas-pengajuan');
// Route::get('/fakultas-pengajuan/create', [PengajuanController::class, 'create'])->name('fakultas-pengajuan-create');
// // web.php atau routes.php
Route::get('/fakultas-pengajuan', [PengajuanController::class, 'index'])->name(
    'fakultas-pengajuan'
);
Route::get('/fakultas-pengajuan/create', [
    PengajuanController::class,
    'create',
])->name('fakultas-pengajuan-create');
Route::post('/fakultas-pengajuan/store', [
    PengajuanController::class,
    'store',
])->name('fakultas-pengajuan-store');
Route::get('/fakultas-pengajuan/{id}/edit', [
    PengajuanController::class,
    'edit',
])->name('fakultas-pengajuan.edit');
Route::put('/fakultas-pengajuan/{id}', [
    PengajuanController::class,
    'update',
])->name('fakultas-pengajuan.update');
// web.php or routes.php

Route::delete('/fakultas-pengajuan/{id}', [
    PengajuanController::class,
    'destroy',
])->name('fakultas-pengajuan.destroy');

// Pengajuan
// Route::get('/fakultas-pengajuan', [PengajuanController::class, 'fakultas_pengajuan'])->name('fakultas-pengajuan');
Route::get('/rektor-pengajuan', [
    PengajuanController::class,
    'rektor_pengajuan',
])->name('rektor-pengajuan');

// Pelaporan
Route::get('/fakultas-pelaporan', [
    PelaporanController::class,
    'fakultas_pelaporan',
])->name('fakultas-pelaporan');
Route::get('/fakultas-pelaporan-kegiatan', [
    PelaporanController::class,
    'fakultas_pelaporan_kegiatan',
])->name('fakultas-pelaporan-kegiatan');
Route::get('/fakultas-pelaporan-seminar', [
    PelaporanController::class,
    'fakultas_pelaporan_seminar',
])->name('fakultas-pelaporan-seminar');
Route::get('/rektor-pelaporan', [
    PelaporanController::class,
    'rektor_pelaporan',
])->name('rektor-pelaporan');

// Realisasi
Route::get('/fakultas-realisasi', [
    RealisasiController::class,
    'fakultas_realisasi',
])->name('fakultas-realisasi');
Route::get('/rektor-realisasi', [
    RealisasiController::class,
    'rektor_realisasi',
])->name('rektor-realisasi');

// Route::get('fakultaspengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
// Route::get('pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
// Route::post('pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
