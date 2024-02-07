<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FakultasPelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'title' => 'Pelaporan Anggaran Fakultas',
        );

        return view('fakultas.pelaporan.pelaporan-anggaran.index', $data);
    }

    public function fakultas_pelaporan_kegiatan()
    {
        $data = array(
            'title' => 'Pelaporan Kegiatan Fakultas',
        );

        return view("fakultas.pelaporan.pelaporan-kegiatan.index", $data);
    }

    public function fakultas_pelaporan_seminar()
    {
        $pelaporanData = Pelaporan::get();

        $viewData = [
            'title' => 'Pelaporan Seminar Fakultas',
            'data'  => $pelaporanData,
        ];

        return view('fakultas.pelaporan.pelaporan-anggaran.seminar', $viewData);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.pelaporan.pelaporan-anggaran.seminar', [
            'title' => 'Tambah Data Karyawan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'item'          => 'required',
            'satuan'        => 'required',
            'volume'        => 'required',
            'harga_satuan'  => 'required',
            'total'         => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['item']          = $request->item;
        $data['satuan']        = $request->satuan;
        $data['volume']        = $request->volume;
        $data['harga_satuan']  = $request->harga_satuan;
        $data['total']         = $request->total;

        Pelaporan::create($data);

        return redirect()->route('fakultas-pelaporan-seminar');
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
