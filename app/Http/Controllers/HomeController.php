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
    
        $dataBulanan = [
            'Januari' => $this->getDataForMonth('pengajuan', Carbon::parse('January')),
            'Februari' => $this->getDataForMonth('pengajuan', Carbon::parse('February')),
            'Maret' => $this->getDataForMonth('pengajuan', Carbon::parse('March')),
            'April' => $this->getDataForMonth('pengajuan', Carbon::parse('April')),
            'Mei' => $this->getDataForMonth('pengajuan', Carbon::parse('May')),
            'Juni' => $this->getDataForMonth('pengajuan', Carbon::parse('June')),
            'Juli' => $this->getDataForMonth('pengajuan', Carbon::parse('July')),
            'Agustus' => $this->getDataForMonth('pengajuan', Carbon::parse('August')),
            'September' => $this->getDataForMonth('pengajuan', Carbon::parse('September')),
            'Oktober' => $this->getDataForMonth('pengajuan', Carbon::parse('October')),
            'November' => $this->getDataForMonth('pengajuan', Carbon::parse('November')),
            'Desember' => $this->getDataForMonth('pengajuan', Carbon::parse('December')),
        ];
    
        return view('dashboard.dashboard', [
            'jumlahPengajuan' => $jumlahPengajuan,
            'jumlahPelaporan' => $jumlahPelaporan,
            'jumlahPersetujuan' => $jumlahPersetujuan,
            'jumlahRealisasi' => $jumlahRealisasi,
            'title' => $title,
            'dataBulanan' => $dataBulanan,
        ]);
    }
}    