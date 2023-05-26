<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\berita;



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

        $new_post = new post;
        $new_post -> title     = $request ->title;
        $new_post -> excerpt   = $request ->excerpt;
        $new_post -> content   = $request ->content;
        

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

    public function edit_profil()
    {
       return view('admin.edit_profil');
    }

    /**
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
