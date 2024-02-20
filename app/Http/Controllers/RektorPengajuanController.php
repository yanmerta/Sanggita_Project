<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\rektor\Pengajuan;

class RektorPengajuanController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::paginate(5);
        $title = 'List of Pengajuans Rektor';

        return view('rektor.pengajuan.index', compact('pengajuans', 'title'));
    }

    public function show(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $title = 'show Layanan Pengajuan Anggaran';

        return view('rektor.pengajuan.show', compact('pengajuan','title'));
    }

    public function approve(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        $pengajuan->update(['status' => 'disetujui']);

        return redirect()->route('admin.rektor-pengajuan')->with('success', 'Pengajuan berhasil disetujui.');
    }

    public function reject(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        // Perform rejection logic here...

        // Update the status to 'ditolak', customize this based on your logic
        $pengajuan->update(['status' => 'ditolak']);

        return redirect()->route('admin.rektor-pengajuan')->with('success', 'Pengajuan berhasil ditolak.');
    }
}