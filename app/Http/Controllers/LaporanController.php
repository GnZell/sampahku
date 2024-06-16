<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanRequest;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class LaporanController extends Controller
{
    //
    public function index()
    {

        if (Auth::user()->role == 'admin') {
            $sampahku = Laporan::all(); // Admin dapat melihat semua laporan
        } else {
            $sampahku = Laporan::where('user_id', Auth::id())->get(); // User hanya melihat laporan mereka
        }

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
            'nama' => htmlspecialchars($request->nama),
            'alamat' => htmlspecialchars($request->alamat),
            'deskripsi' => htmlspecialchars($request->deskripsi),
            'titik_koordinat' => htmlspecialchars($request->titik_koordinat),
            'foto' => $namafile,
            'status' => 'Proses',
            'user_id' => Auth::id()
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
        $isAdmin = Auth::user()->role == 'admin';
        return view('sampahku.update', compact('sampahku', 'isAdmin'));
    }

    public function update(Request $request, $id)
    {
        $data['nama'] = htmlspecialchars($request->nama);
        $data['alamat'] = htmlspecialchars($request->alamat);
        $data['deskripsi'] = htmlspecialchars($request->deskripsi);
        $data['titik_koordinat'] = htmlspecialchars($request->titik_koordinat);
        $data['status'] = htmlspecialchars($request->status);

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

    public function profil()
    {
        return view('sampahku.profil');
    }
}
