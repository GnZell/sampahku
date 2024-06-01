<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanRequest;
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

    public function store(LaporanRequest $request)
    {
        $foto = $request->foto;
        $namafile  = $foto->getClientOriginalName();

        $dataupload = new Laporan;
        $dataupload->foto = $namafile;

        $foto->move(public_path() . '/upload', $namafile);

        Laporan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'titik_koordinat' => $request->titik_koordinat,
            'foto' => $namafile,
            'user_id' => $request->user_id

        ]);
        return redirect()->route('sampahku.index');
    }

    public function detail($id)
    {
        $sampahku = Laporan::findOrFail($id);
        return view('sampahku.detail', compact('sampahku'));
    }

    public function destroy($id)
    {
        $sampahku = Laporan::findorfail($id);

        $file = public_path('/upload/') . $sampahku->foto;

        if (file_exists($file)) {
            @unlink($file);
        }

        $sampahku->delete();
        return redirect()->route('sampahku.index');
    }
}
