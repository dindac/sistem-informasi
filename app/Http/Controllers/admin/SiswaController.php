<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function show()
    {
        $siswa_list = Siswa::paginate(10);
        return view('admin.siswa.show', compact('siswa_list'));
    }
    public function create()
    {
        $list_kelas = Kelas::pluck('nama_kelas', 'id');
        return view('admin.siswa.create', compact('list_kelas'));
    }

    public function store(Request $request){

        $input = $request->all();
        $siswa = new Siswa($input);

        if ($siswa->save()) {
            return redirect('cp\show_siswa')->with('sukses','Data Berhasil diinput');
        }
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $list_kelas = Kelas::pluck('nama_kelas', 'id');
        return view('admin.siswa.edit', compact('siswa', 'list_kelas'));
    }

    public function update(Request $request, $id) {
        $siswa = Siswa::find($id);
        $input = $request->all();

        if ($siswa->update($input)) {
            return redirect('cp\show_siswa')->with('sukses','Data Berhasil diperbarui');
        }
    }

    public function delete($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('cp\show_siswa')->with('sukses','Data Berhasil dihapus');
    }

    public function detail($id){
        $siswa = Siswa::find($id);
        return view('admin.siswa.detail', compact('siswa'));
    }
}
