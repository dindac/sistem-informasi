<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotifikasi;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RegisterController extends Controller
{
    public function registrasiMurid()
    {
        $list_kelas = Kelas::pluck('nama_kelas', 'id');
        return view('auth.register', compact('list_kelas'));
    }

    public function enroll(Request $request)
    {
        $rules = [
            'name'                  => 'required',
            'avatar'                => 'mimes:jpeg,png,jpg,svg',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:8|same:konfirmasi_password',
            'konfirmasi_password'   => 'required|min:8',
            'nisn'                  => 'unique:siswa',
            'jk'                    => 'required',
            'agama'                 => 'required',
        ];

        $messages = [
            'name.required'                 => 'Nama Wajib Diisi',
            'avatar.mimes'                  => 'Foto harus berformat gambar (jpeg, png, jpg atau svg)',
            'email.required'                => 'Email wajib diisi',
            'email.email'                   => 'Email tidak valid',
            'email.unique'                  => 'Email sudah terdaftar',
            'password.required'             => 'Password Wajib diisi',
            'password.min'                  => 'Password minimal 8 karakter',
            'password.same'                 => 'Konfirmasi Password Harus Sama Dengan Password',
            'konfirmasi_password.required'  => 'Konfirmasi password wajib diisi',
            'konfirmasi_password.min'       => 'Konfirmasi password minimal 8 karakter',
            'nisn.unique'                   => 'NISN Sudah Terdaftar',
            'jk.required'                   => 'Jenis Kelamin Wajib Diisi',
            'agama.required'                => 'Agama Wajib Diisi',
        ];

        $validator = FacadesValidator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $options = [
            'cost' => 11 // parameter untuk algoritma enkripsi BLOWFISH
        ];

        if($request->avatar) {
            // proses mengupload foto profil
            $image = $request->file('avatar');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('uploads/foto'), $imageName);

            $user = User::create([
                'name' => $request->name,
                'avatar' => $imageName,
                'email' => $request->email,
                'status' => 'Siswa',
                'password' => password_hash($request->password, PASSWORD_BCRYPT, $options),
                'konfirmasi_password' => $request->konfirmasi_password
            ]);

            $input = $request->except(['name', 'avatar', 'email', 'password', 'konfirmasi_password']);

            Siswa::create(array_merge($input, ['user_id' => $user->id]));

        }
        else {
            $foto = 'default.png';

            $user = User::create([
                'name' => $request->name,
                'avatar' => $foto,
                'email' => $request->email,
                'status' => 'Siswa',
                'password' => password_hash($request->password, PASSWORD_BCRYPT, $options),
                'konfirmasi_password' => $request->konfirmasi_password
            ]);

            $input = $request->except(['name', 'avatar', 'email', 'password', 'konfirmasi_password']);

            Siswa::create(array_merge($input, ['user_id' => $user->id]));
            Mail::send(new MailNotifikasi($user));
        }

        return redirect('/login')->with('Registrasi Murid Berhasil, Silahkan Login');
    }
}
