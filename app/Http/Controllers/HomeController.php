<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Pelaporan;
use App\Models\Persetujuan;
use App\Models\Realisasi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function getDataForMonth($kriteria, $date)
    {
        $query = Pengajuan::where('kriteria', $kriteria)
            ->whereMonth('waktu_pelaksanaan', $date->month)
            ->toSql();
    
        info("Query for $date: " . $query);
    
        $data = Pengajuan::where('kriteria', $kriteria)
            ->whereMonth('waktu_pelaksanaan', $date->month)
            ->get();
    
        info("Data for $date: " . $data);
    
        return $data->count();
    }
    
    
    public function index()
    {
        $title = 'Dashboard';
    
        $jumlahPengajuan = Pengajuan::count();
        $jumlahPelaporan = Pelaporan::count();
        $jumlahPersetujuan = Persetujuan::count();
        $jumlahRealisasi = Realisasi::count();
        $dataReport = Pengajuan::all();
    
        $dataBulanan = [
            'Januari' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 1)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 1)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 1)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 1)->count(),
            ],
            'Februari' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 2)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 2)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 2)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 2)->count(),
            ],
            'Maret' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 3)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 3)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 3)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 3)->count(),
            ],
            'April' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 4)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 4)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 4)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 4)->count(),
            ],
            'Mei' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 5)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 5)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 5)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 5)->count(),
            ],
            'Juni' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 6)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 6)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 6)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 6)->count(),
            ],
            'Juli' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 7)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 7)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 7)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 7)->count(),
            ],
            'Agustus' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 8)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 8)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 8)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 8)->count(),
            ],
            'September' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 9)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 9)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 9)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 9)->count(),
            ],
            'Oktober' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 10)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 10)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 10)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 10)->count(),
            ],
            'November' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 11)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 11)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 11)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 11)->count(),
            ],
            'Desember' => [
                'pengajuan' => Pengajuan::whereMonth('created_at', 12)->count(),
                'realisasi' => Realisasi::whereMonth('created_at', 12)->count(),
                'pelaporan' => Pelaporan::whereMonth('created_at', 12)->count(),
                'persetujuan' => Persetujuan::whereMonth('created_at', 12)->count(),
            ],
        ];
        
    
        return view('dashboard.dashboard', [
            'jumlahPengajuan' => $jumlahPengajuan,
            'jumlahPelaporan' => $jumlahPelaporan,
            'jumlahPersetujuan' => $jumlahPersetujuan,
            'jumlahRealisasi' => $jumlahRealisasi,
            'title' => $title,
            'dataBulanan' => json_encode($dataBulanan), // Menggunakan json_encode di sini
        ]);
    }
}    