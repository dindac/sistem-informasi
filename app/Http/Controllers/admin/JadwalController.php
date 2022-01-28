<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function show()
    {
        $jadwal_list = Jadwal::paginate(5);
        return view('admin.jadwal.show', compact('jadwal_list'));
    }

    public function create()
    {
        $list_kelas = Kelas::pluck('nama_kelas', 'id');
        return view('admin.jadwal.create', compact('list_kelas'));
    }

    public function store(Request $request){

        $input = $request->all();
        $jadwal = new Jadwal($input);

        if ($jadwal->save()) {
            return redirect('cp\show_jadwal')->with('sukses','Data Berhasil diinput');
        }
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $list_kelas = Kelas::pluck('nama_kelas', 'id');
        return view('admin.jadwal.edit', compact('jadwal', 'list_kelas'));
    }

    public function update(Request $request, $id) {
        $jadwal = Jadwal::find($id);
        $input = $request->all();

        if ($jadwal->update($input)) {
            return redirect('cp\show_jadwal')->with('sukses','Data Berhasil diperbarui');
        }
    }

    public function delete($id){
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect('cp\show_jadwal')->with('sukses','Data Berhasil dihapus');
    }

    public function detail($id){
        $jadwal = Jadwal::find($id);
        return view('admin.jadwal.detail', compact('jadwal'));
    }
}
