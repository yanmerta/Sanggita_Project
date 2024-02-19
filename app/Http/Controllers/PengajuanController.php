<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rektor\Pengajuan;

class PengajuanController extends Controller
{
    public function index(Request $request)
    {
        $pengajuans = Pengajuan::paginate(5);
        $title = 'Layanan Pengajuan Anggaran';

        $query = Pengajuan::query();

        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q
                    ->where('judul_kegiatan', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('kriteria', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('status', 'LIKE', '%' . $searchTerm . '%');
            });
        }

        // Tambahkan bagian untuk filter berdasarkan kriteria di sini
        if ($request->filled('filter_status')) {
            $filter = $request->input('filter_status');
            $query->where('status', $filter);
        }

        $pengajuans = $query->paginate(5);
        return view('fakultas.pengajuan.index', compact('pengajuans', 'title'));
    }

    public function create()
    {
        $title = 'Create Pengajuan';
        return view('fakultas.pengajuan.create', compact('title'));
    }

    public function store(Request $request)
    {
            // Melakukan validasi form
            $validatedData = $request->validate([
                'unit_fakultas' => 'required|string|max:255',
                'judul_kegiatan' => 'required|string|max:255',
                'total_anggaran' => 'required|numeric',
                'waktu_pelaksanaan' => 'required|date',
                'kriteria' => 'required|in:urgent,biasa',
            ]);
        
            // Set the default status to "Diusulkan"
            $validatedData['status'] = 'diusulkan';
        

        // Simpan data ke database
        Pengajuan::create($validatedData);

        // Redirect atau berikan respons yang sesuai
        return redirect()
            ->route('admin.fakultas-pengajuan')
            ->with('success', 'Pengajuan anggaran berhasil dicreate.');
    }

    public function edit(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        $title = 'Edit Pengajuan'; // Pastikan variabel $title telah didefinisikan
        return view('fakultas.pengajuan.edit', compact('pengajuan', 'title'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_kegiatan' => 'required|string|max:255',
            'total_anggaran' => 'required|numeric',
            'waktu_pelaksanaan' => 'required|date',
            'kriteria' => 'required|in:urgent,biasa',
        ]);
    
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update($request->all());
    
        return redirect()
            ->route('admin.fakultas-pengajuan')
            ->with('success', 'Pengajuan berhasil diperbarui.');
    }
    

    public function destroy($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->first();
        $pengajuan->delete();

        return redirect()
            ->route('admin.fakultas-pengajuan')
            ->with(
                'success',
                'Data Layanan Pengajuan Anggaran berhasil di hapus.'
            );
    }
}
