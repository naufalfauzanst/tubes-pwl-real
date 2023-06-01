<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pengguna.login');
    }

    public function ceklogin(Request $request)
    {
        // dd($request);
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        // dd($request);
        // jika sukses
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('/admin');
        // }

        $input = $request->all();
        if(Auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password']))){
            if(Auth()->user()->user_role == 'user'){
                return redirect('/admin');
            }elseif(Auth()->user()->user_role == 'admin'){
                return redirect('/admin');  
            }
        }
        // return redirect()->route('login')->with('error', 'email and password are wrong');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/pengguna/login');
    }
}
