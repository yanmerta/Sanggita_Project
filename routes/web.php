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
Route::get('/fakultas-persetujuan', [PersetujuanController::class, 'fakultas_persetujuan'])->name('fakultas-persetujuan');
Route::get('/rektor-persetujuan', [PersetujuanController::class, 'rektor_persetujuan'])->name('rektor-persetujuan');

// Pengajuan
Route::get('/fakultas-pengajuan', [PengajuanController::class, 'fakultas_pengajuan'])->name('fakultas-pengajuan');
Route::get('/rektor-pengajuan', [PengajuanController::class, 'rektor_pengajuan'])->name('rektor-pengajuan');

// Pelaporan
Route::get('/fakultas-pelaporan', [PelaporanController::class, 'fakultas_pelaporan'])->name('fakultas-pelaporan');
Route::get('/fakultas-pelaporan-kegiatan', [PelaporanController::class, 'fakultas_pelaporan_kegiatan'])->name('fakultas-pelaporan-kegiatan');
Route::get('/fakultas-pelaporan-seminar', [PelaporanController::class, 'fakultas_pelaporan_seminar'])->name('fakultas-pelaporan-seminar');
Route::get('/rektor-pelaporan', [PelaporanController::class, 'rektor_pelaporan'])->name('rektor-pelaporan');

// Realisasi
Route::get('/fakultas-realisasi', [RealisasiController::class, 'fakultas_realisasi'])->name('fakultas-realisasi');
Route::get('/rektor-realisasi', [RealisasiController::class, 'rektor_realisasi'])->name('rektor-realisasi');

