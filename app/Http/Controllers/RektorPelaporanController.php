<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;

class RektorPelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelaporans = Pelaporan::paginate(5);
        $title = 'List of Pelaporans Anggaran Rektor'; // Add this line to define $title

        return view('rektor.pelaporan.anggaran.index', compact('pelaporans', 'title'));

    }

    public function rektor_pelaporan_kegiatan()
    {
        $pelaporans = Pelaporan::paginate(5);
        $title = 'List of Pelaporans Kegiatan Rektor'; // Add this line to define $title

        return view('rektor.pelaporan.kegiatan.index', compact('pelaporans', 'title'));
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
