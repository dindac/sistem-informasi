<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas_list = Kelas::orderBy('nama_kelas', 'asc')->get();
        return view('admin.kelas.show', compact('kelas_list'));
    }

    public function create()
    {
        return view('admin.kelas.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_kelas' => 'required',
        ]);

        $kelas = Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        if ($kelas->save()) {
            return redirect('cp\show_kelas')->with('sukses','Data Berhasil diinput');
        }
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id) {
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama_kelas;

        if ($kelas->update()) {
            return redirect('cp\show_kelas')->with('sukses','Data Berhasil diperbarui');
        }
    }

    public function delete($id){
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect('cp\show_kelas')->with('sukses','Data Berhasil dihapus');
    }
}
