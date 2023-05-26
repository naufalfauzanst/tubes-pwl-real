<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = Kategori::all();
        return view('admin.kategori', compact('kategori'));
    }

    public function tambah_kategori()
    {
        return view('admin.tambah_kategori');
    }

    public function create()
    {

        return view('kategori.tambah');
    }

    public function store(Request $request)
    {
        // $kategori = Kategori::all();
        // dd($request->all());
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->kategori;


        $kategori->save();

        return redirect()->route('kategori_utama');
    }
    public function edit_kategori($id)
    {

        $kategori = Kategori::find($id);
        return view('admin.kategori_edit', compact('kategori'));

    }
    public function edit_kat(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        $validated = $request->validate([
            'nama_kategori' => 'required|min:5|max:100',
        ]);

        $kategori->nama_kategori = $validated['nama_kategori'];
        $kategori->save();

        return redirect()->route('kategori_utama');
    }
    public function hapus(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();

        return redirect()->route('kategori_utama');
    }


    // public function edit_post($id)
    // {
    //     $post = Post::find($id);
    //     return view('admin.kategori_edit', compact('kategori'));
    // }

    // public function update_kategori(Request $request, $id)
    // {
    //     $kategori = Kategori::find($id);

    //     $validated = $request->validate([
    //         'title'     => 'required|min:5|max:100',
    //         'excerpt'   => 'required|min:20',
    //         'content'   => 'required|min:50',
    //         'image'     => 'image|mimes:jpeg,jpg,png|max:4096'
    //     ]);

    //     $kategori -> title      = $request->title;
    //     $kategori -> excerpt    = $request->excerpt;
    //     $kategori -> content    = $request->content;
    //     $kategori -> author_id  = $request->author_id;

    //     if($request->hasFile('image')){
    //         //    define image location in local path
    //         $location = public_path('/img');

    //         // ambil file image dan simpan ke local server
    //         $request->file('image')->move($location, $request->file('image')->getClientOriginalName());

    //         // simpan nama file di database
    //         $kategori->image = $request->file('image')->getClientOriginalName(); 
    //     }

    //     $kategori->save();
    //     return redirect('/admin/kategori')->with('update_status', 'kategori berhasil diperbaharui');
    // }

    public function delete_kategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/admin/kategori')->with('status', "kategori berhasil dihapus");
    }



    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */


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