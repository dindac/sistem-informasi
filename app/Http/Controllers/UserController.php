<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function profile_show()
    {
        if(auth()->user()->status == 'Admin') {
            return view('admin.profil');
        } else if(auth()->user()->status == 'Siswa') {
            $siswa = Siswa::where('user_id', auth()->user()->id)->first();
            return view('siswa.profil', compact('siswa'));
        }
    }

    public function post_profile(Request $request)
    {
        $data = $request->all();

        if(auth()->user()->status == 'Siswa') {
            $rules = [
                'name'                  => 'required',
                'nisn'                  => Rule::unique('siswa')->ignore(Siswa::where('user_id', auth()->user()->id)->first()),
                'jk'                    => 'required',
                'agama'                 => 'required',
                'alamat'                => 'required',
            ];

            $messages = [
                'name.required'                 => 'Nama Wajib Diisi',
                'nisn.unique'                   => 'NISN Sudah Terdaftar',
                'jk.required'                   => 'Jenis Kelamin Wajib Diisi',
                'agama.required'                => 'Agama Wajib Diisi',
                'alamat.required'               => 'Alamat Wajib Diisi',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }

            $siswa = Siswa::where('user_id', auth()->user()->id)->first();
            $siswa->nisn = $request->nisn;
            $siswa->jk = $request->jk;
            $siswa->agama = $request->agama;
            $siswa->alamat = $request->alamat;
            $siswa->save();

            $user = User::find($siswa->user_id);
            $user->name = $request->name;
            $user->save();
        }
        return redirect()->back()->with('sukses','Profil Berhasil diubah');
    }

    public function ubah_avatar(Request $request)
    {
        $rules = [
            'avatar'                => 'required|image|mimes:jpeg,png,jpg,svg',
        ];

        $messages = [
            'avatar.required'                 => 'Foto Wajib Diisi',
            'avatar.mimes'                    => 'Foto harus berformat gambar (jpeg, png, jpg atau svg)',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = $request->all();

        if(auth()->user()->status == 'Admin') {
            $user = User::where('id', auth()->user()->id)->first();
            $image = $request->file('avatar');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/admin'),$imageName);
            $data['avatar'] = $imageName;

            $user->update($data);

        } else if(auth()->user()->status == 'siswa') {
            $user = User::where('id', auth()->user()->id)->first();
            $image = $request->file('avatar');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/foto'),$imageName);
            $data['avatar'] = $imageName;

            $user->update($data);


        }
        return redirect()->back()->with('sukses','Ubah Foto Profil Berhasil Dilakukan');

    }
}
