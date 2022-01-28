<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->status == 'Admin') {
                return redirect()->intended('admin');
            } elseif ($user->status == 'Siswa') {
                return redirect()->intended('siswa');
            }
        }
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('email','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->status == 'Admin') {
                    return redirect()->intended('cp');
                } elseif ($user->status == 'Siswa') {
                    return redirect()->intended('siswa');
                }
                return redirect()->intended('/');
            }

        return redirect('/login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'Silahkan mengisi form register untuk memiliki akun']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('/login');
    }
}
