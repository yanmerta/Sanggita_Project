<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function rektor_pelaporan()
    {
        $data = array(
            'title' => 'Pelaporan Rektor',
        );

        return view('rektor.pelaporan.index', $data);
    }

    public function fakultas_pelaporan()
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
        $data = array(
            'title' => 'Pelaporan Seminar Fakultas',
        );

        return view('fakultas.pelaporan.pelaporan-anggaran.seminar', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
