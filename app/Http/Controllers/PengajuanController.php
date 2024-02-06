<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::paginate(5);
        $title = 'List of Pengajuans'; // Add this line to define $title

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
            'judul_kegiatan' => 'required|string|max:255',
            'total_anggaran' => 'required|numeric',
            'waktu_pelaksanaan' => 'required|string',
            'kriteria' => 'required|in:urgent,biasa',
            'status' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Pengajuan::create($validatedData);

        // Redirect atau berikan respons yang sesuai
        return redirect()
            ->route('fakultas-pengajuan')
            ->with('success', 'Pengajuan anggaran berhasil disimpan.');
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
            'kriteria' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update($request->all());

        return redirect()
            ->route('fakultas-pengajuan')
            ->with('success', 'Pengajuan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $pengajuan = Pengajuan::findOrFail($id);
            $pengajuan->delete();

            return redirect()
                ->route('fakultas-pengajuan.destroy')
                ->with('success', 'Pengajuan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()
                ->route('fakultas-pengajuan.destroy')
                ->with(
                    'error',
                    'Error deleting Pengajuan: ' . $e->getMessage()
                );
        }
    }
}