<?php

namespace App\Http\Controllers\fakultas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fakultas\Pengajuan;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuans = Pengajuan::all();

        return view('fakultas.pengajuan.index', compact('pengajuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.pengajuan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_kegiatan' => 'required|string|max:255',
            'total_anggaran' => 'required|numeric',
            'waktu_pelaksanaan' => 'required|date',
            'kriteria' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        Pengajuan::create($request->all());

        return redirect()
            ->route('pengajuan.index')
            ->with('success', 'Pengajuan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('fakultas.pengajuan.show', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('fakultas.pengajuan.edit', compact('pengajuan'));
    }

    /**
     * Update the specified resource in storage.
     */
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
            ->route('pengajuan.index')
            ->with('success', 'Pengajuan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $pengajuan = Pengajuan::findOrFail($id);
            $pengajuan->delete();

            return redirect()
                ->back()
                ->with('success', 'Pengajuan berhasil dihapus.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error deleting Pengajuan: ' . $e->getMessage());

            return redirect()
                ->back()
                ->with(
                    'error',
                    'Error deleting Pengajuan: ' . $e->getMessage()
                );
        }
    }
}
