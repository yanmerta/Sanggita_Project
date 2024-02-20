<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rektor\Persetujuan;

class RektorPersetujuanController extends Controller
{
    public function index()
    {
        // Fetch and display a list of approval requests with related Pengajuan data
        $pengajuans = Persetujuan::with('pengajuan')->get();
    
        $title = 'List of Approval Requests'; // Set the title
    
        return view('rektor.persetujuan.index', ['pengajuans' => $pengajuans, 'title' => $title]);
    }

    public function show($id)
    {
        // Fetch and display details of a specific approval request with related Pengajuan data
        $pengajuan = Persetujuan::with('pengajuan')->find($id);
        $title = 'List of';

        return view('rektor.persetujuan.show', ['pengajuan' => $pengajuan, ]);
    }
}
