<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Add this line

use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    // Display the user profile
    public function index()
    {
        $title = 'Halaman Profil';
        $user = Auth::user();
        return view('profil.index', compact('user', 'title'));
    }

    // Display the profile form
    public function edit()
    {
        $title = 'Edit Profil';
        $user = Auth::user();
        return view('profil.edit', compact('user', 'title'));
    }

    // Handle the profile update
    public function update(Request $request)
    {
        // Add Request $request here
        // Your existing update logic goes here

        return redirect()
            ->route('profil-update')
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
