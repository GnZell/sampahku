<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //
    public function index()
    {
        $sampahku = Laporan::latest()->get();
        return view('sampahku.index', compact('sampahku'));
    }

    public function create()
    {
        return view('sampahku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('upload', 'public');
        }

        Laporan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'titik_koordinat' => $request->titik_koordinat,
            'foto' => $path,
            'user_id' => $request->user_id

        ]);
        return redirect()->route('sampahku.index');
    }

    public function detail($id)
    {
        $sampahku = Laporan::findOrFail($id);
        return view('sampahku.detail', compact('sampahku'));
    }
}
