<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; 

class UserController extends Controller
{
    function index()
        {
        return view('pengguna/login');
        }
    function login(Request $request)
        {
            Session::flash('email', $request->input('email'));

            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ], [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi'
            ]);

            $infologin = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if (Auth::attempt($infologin)) {
                return redirect('siswa')->with('success', 'Berhasil login');
            } else {
                return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
            }
        }
}

// }
// }