<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FakultasPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuanData = Pengajuan::get();

        $viewData = [
            'title' => 'Pengajuan Fakultas',
            'data'  => $pengajuanData,
        ];

        return view('fakultas.pengajuan.index', $viewData);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.pengajuan.create', [
            'title' => 'Tambah Data Pengajuan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'judul_kegiatan'          => 'required',
            'total_anggaran'        => 'required',
            'waktu_pelaksanaan'        => 'required',
            'kriteria'  => 'required',
            'status'         => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['judul_kegiatan']          = $request->judul_kegiatan;
        $data['total_anggaran']        = $request->total_anggaran;
        $data['waktu_pelaksanaan']        = $request->waktu_pelaksanaan;
        $data['kriteria']  = $request->kriteria;
        $data['status']         = $request->status;

        Pengajuan::create($data);

        return redirect()->route('fakultas-pengajuan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
