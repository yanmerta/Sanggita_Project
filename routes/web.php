<?php

use App\Http\Controllers\FakultasPelaporanController;
use App\Http\Controllers\FakultasPengajuanController;
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

// Fakultas
// Pengajuan
Route::get('/fakultas-pengajuan', [FakultasPengajuanController::class, 'index'])->name('fakultas-pengajuan.index');
Route::get('/fakultas-pengajuan/create', [FakultasPengajuanController::class, 'create'])->name('fakultas-pengajuan.create');
Route::post('/fakultas-pengajuan/store', [FakultasPengajuanController::class, 'store'])->name('fakultas-pengajuan.store');
Route::get('/fakultas-pengajuan/{id}/edit', [FakultasPengajuanController::class, 'edit'])->name('fakultas-pengajuan.edit');
Route::put('/fakultas-pengajuan/{id}', [FakultasPengajuanController::class, 'update'])->name('fakultas-pengajuan.update');
Route::delete('/fakultas-pengajuan/{id}', [FakultasPengajuanController::class, 'destroy'])->name('fakultas-pengajuan.destroy');

// Persetujuan
Route::get('/fakultas-persetujuan', [PersetujuanController::class, 'fakultas_persetujuan'])->name('fakultas-persetujuan');

// Realisasi
Route::get('/fakultas-realisasi', [RealisasiController::class, 'fakultas_realisasi'])->name('fakultas-realisasi');

// Pelaporan
Route::get('/fakultas-pelaporan', [FakultasPelaporanController::class, 'index'])->name('fakultas-pelaporan.index');
Route::get('/fakultas-pelaporan-kegiatan', [FakultasPelaporanController::class, 'fakultas_pelaporan_kegiatan'])->name('fakultas-pelaporan-kegiatan');
Route::get('/fakultas-pelaporan-seminar', [FakultasPelaporanController::class, 'fakultas_pelaporan_seminar'])->name('fakultas-pelaporan-seminar');
Route::get('/fakultas-pelaporan.create', [FakultasPelaporanController::class, 'create'])->name('fakultas-pelaporan.create');
Route::post('/fakultas-pelaporan.store', [FakultasPelaporanController::class, 'store'])->name('fakultas-pelaporan.store');

// Rektor
// Persetujuan
Route::get('/rektor-persetujuan', [PersetujuanController::class, 'rektor_persetujuan'])->name('rektor-persetujuan');

// Pengajuan
Route::get('/rektor-pengajuan', [PengajuanController::class, 'index'])->name('rektor-pengajuan.index');

// Pelaporan
Route::get('/rektor-pelaporan', [PelaporanController::class, 'index'])->name('rektor-pelaporan.index');

// Realisasi
Route::get('/rektor-realisasi', [RealisasiController::class, 'rektor_realisasi'])->name('rektor-realisasi');

