<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $rektorData = array(
    //         'title' => 'Persetujuan Rektor',
    //     );

    //     $fakultasData = array(
    //         'title' => 'Persetujuan Fakultas',
    //     );

    //     $rektorView = view('rektor.persetujuan.index', $rektorData);
    //     $fakultasView = view('fakultas.persetujuan.index', $fakultasData);

    //     return compact('rektorView', 'fakultasView');
    // }


    public function rektor_persetujuan()
    {
        $data = array(
            'title' => 'Persetujuan Rektor',
        );

        return view('rektor.persetujuan.index', $data);
    }

    public function fakultas_persetujuan()
    {
        $data = array(
            'title' => 'Persetujuan Fakultas',
        );

        return view('fakultas.persetujuan.index', $data);
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
