<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\RealisasiController;
use App\Http\Controllers\RektorPelaporanController;
use App\Http\Controllers\RektorPengajuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

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
//     return view('auth.login');
// });

// Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
// Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');
// Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
// Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name(
    'register.store'
);

// Fakultas
// Persetujuan
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'],
    function () {
        Route::get('/profil', [ProfilController::class, 'index'])->name(
            'profil'
        );
        Route::post('/profil-update/{id}', [
            ProfilController::class,
            'update',
        ])->name('profil-update');

        Route::get('/dashboard', [HomeController::class, 'index'])->name(
            'dashboard'
        );
        Route::get('/fakultas-persetujuan', [
            PersetujuanController::class,
            'fakultas_persetujuan',
        ])->name('fakultas-persetujuan');
        // Pengajuan
        Route::get('/fakultas-pengajuan', [
            PengajuanController::class,
            'index',
        ])->name('fakultas-pengajuan');
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
        Route::delete('/fakultas-pengajuan/{id}', [
            PengajuanController::class,
            'destroy',
        ])->name('fakultas-pengajuan.destroy');

        // Pelaporan
        Route::get('/fakultas-pelaporan', [
            PelaporanController::class,
            'index',
        ])->name('fakultas-pelaporan');
        Route::get('/fakultas-pelaporan-seminar', [
            PelaporanController::class,
            'fakultas_pelaporan_seminar',
        ])->name('fakultas-pelaporan-seminar');
        Route::get('/fakultas-pelaporan/create', [
            PelaporanController::class,
            'create',
        ])->name('fakultas-pelaporan-create');
        Route::post('/fakultas-pelaporan/store', [
            PelaporanController::class,
            'store',
        ])->name('fakultas-pelaporan-store');
        Route::get('/fakultas-pelaporan/{id}/edit', [
            PelaporanController::class,
            'edit',
        ])->name('fakultas-pelaporan.edit');
        Route::put('/fakultas-pelaporan/{id}', [
            PelaporanController::class,
            'update',
        ])->name('fakultas-pelaporan.update');
        Route::delete('/fakultas-pelaporan/{id}', [
            PelaporanController::class,
            'destroy',
        ])->name('fakultas-pelaporan.destroy');
        Route::get('/fakultas-pelaporan-kegiatan', [
            PelaporanController::class,
            'fakultas_pelaporan_kegiatan',
        ])->name('fakultas-pelaporan-kegiatan');

        // Realisasi
        Route::get('/fakultas-realisasi', [
            RealisasiController::class,
            'fakultas_realisasi',
        ])->name('fakultas-realisasi');
        // Rektor
        // Pengajuan
        Route::get('/rektor-pengajuan', [
            RektorPengajuanController::class,
            'index',
        ])->name('rektor-pengajuan');

        // Persetujuan
        Route::get('/rektor-persetujuan', [
            PersetujuanController::class,
            'rektor_persetujuan',
        ])->name('rektor-persetujuan');
        // Realisasi
        Route::get('/rektor-realisasi', [
            RealisasiController::class,
            'rektor_realisasi',
        ])->name('rektor-realisasi');

        // Pelaporan
        Route::get('/rektor-pelaporan', [
            RektorPelaporanController::class,
            'index',
        ])->name('rektor-pelaporan');
    }
);
