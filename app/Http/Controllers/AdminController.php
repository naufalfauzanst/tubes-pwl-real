<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\berita;
use App\Models\akuns;
use App\Models\akun;
use App\Models\user;




class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     */

     public function komentar()
    {
        return view('admin.komentar');
    }

    public function pengelola_berita()
    {
       return view('admin.pengelola_berita');
    }

    public function show_postingan()
    {
        $berita = berita::select('title', 'excerpt', 'content', 'image')->get();
        return view('admin.pengelola_berita', compact('berita'));
    }

    public function create_post()
    {
        return view('admin.create_post');
    }

    public function store_post(Request $request)
    {
        $validated = $request->validate([
            'title'     => 'required|min:5|max:100',
            'excerpt'   => 'required|min:20|max:150',
            'content'   => 'required|min:50|max:255',
            'image'     => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);

        $new_post = new berita;
        $new_post -> title     = $request ->title;
        $new_post -> excerpt   = $request ->excerpt;
        $new_post -> content   = $request ->content;
        $new_post -> author_id   = $request ->author_id;
        

        if( $request->hasFile('image'))
        {
            $location = public_path('asset/img');

            $request->file('image')->move($location, $request->file('image')->getClientOriginalName());

            $new_post ->image = $request->file('image')->getClientOriginalName();
        }

        $new_post->save();

        return redirect('/admin/pengelola_berita')->with('status',"postingan berhasil ditambahkan");
    }

    

    public function pengguna()
    {
       return view('admin.pengguna');
    }

    public function tambah_pengguna()
    {   
       return view('admin.tambah_pengguna');
    }

    public function store_users(Request $request)
    {   
       
        $validated = $request->validate([
            'nama'     => 'required|min:5|max:100',
            'username' => 'required|min:20|max:150',
            'email'    => 'required|min:50|max:255',
            'password' => 'required|min:50|max:255',
        ]);

       $new_akun = new user;
       $new_akun -> nama       = $request ->nama;
       $new_akun -> username   = $request ->username;
       $new_akun -> email      = $request ->email;
       $new_akun -> password   = $request ->password;
       $new_akun -> level      = $request ->user_role;
        

       
        $new_akun->save();

        return redirect('/admin/tambah_pengguna')->with('status',"postingan berhasil ditambahkan"); 

    }

    public function edit_profil()
    {
       return view('admin.edit_profil');
    }

    /**1
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
