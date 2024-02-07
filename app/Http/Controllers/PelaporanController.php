<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $pelaporans = Pelaporan::paginate(5);
        $title = 'List of Pelaporans Anggaran Fakultas'; // Add this line to define $title

        return view(
            'fakultas.pelaporan.anggaran.index',
            compact('pelaporans', 'title')
        );
    }

    public function fakultas_pelaporan_kegiatan()
    {
        $data = [
            'title' => 'Pelaporan Kegiatan Fakultas',
        ];

        return view('fakultas.pelaporan.kegiatan.index', $data);
    }

    public function fakultas_pelaporan_seminar()
    {
        $pelaporans = Pelaporan::paginate(5);
        $title = 'List of Pelaporans Anggaran Seminar Fakultas'; // Add this line to define $title

        return view(
            'fakultas.pelaporan.anggaran.seminar.seminar',
            compact('pelaporans', 'title')
        );
    }

    public function create()
    {
        $title = 'Create Pelaporan Seminar';
        return view(
            'fakultas.pelaporan.anggaran.seminar.create',
            compact('title')
        );
    }

    public function store(Request $request)
    {
        // Melakukan validasi form
        $validatedData = $request->validate([
            'item' => 'required|string|max:255',
            'satuan' => 'required|string',
            'volume' => 'required|string',
            'harga_satuan' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        // Simpan data ke database
        Pelaporan::create($validatedData);

        // Redirect atau berikan respons yang sesuai
        return redirect()
            ->route('admin.fakultas-pelaporan-seminar')
            ->with('success', 'Pelaporan anggaran seminar berhasil dicreate.');
    }

    public function edit(string $id)
    {
        $pelaporan = Pengajuan::findOrFail($id);

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
            ->route('admin.fakultas-pengajuan')
            ->with('success', 'Pengajuan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelaporan = Pelaporan::where('id', $id)->first();
        $pelaporan->delete();

        return redirect()
            ->route('admin.fakultas-pelaporan-seminar')
            ->with(
                'success',
                'Data Layanan Pengajuan Anggaran berhasil di hapus.'
            );
    }
}
