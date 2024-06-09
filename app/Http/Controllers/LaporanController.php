<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanRequest;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LaporanController extends Controller
{
    //
    public function index()
    {
        $sampahku = Laporan::latest()->get();
        return view('sampahku.index', compact('sampahku'));
    }

    public function dashboard()
    {
        return view('sampahku.dashboard');
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
    public function edit($id)
    {
        $sampahku = Laporan::findOrFail($id);
        return view('sampahku.update', compact('sampahku'));
    }

    public function update(Request $request, $id)
    {
        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['deskripsi'] = $request->deskripsi;
        $data['titik_koordinat'] = $request->titik_koordinat;

        Laporan::whereId($id)->update($data);

        return redirect()->route('sampahku.index');
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
