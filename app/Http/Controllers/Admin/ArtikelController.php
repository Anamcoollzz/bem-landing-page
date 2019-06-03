<?php

namespace App\Http\Controllers\Admin;

use App\Artikel;
use App\Tag;
use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::with('author', 'kategori')->get();
        return view('admin.artikel.index', [
            'artikel'       => $artikel,
            'aktif'         => 'artikel.index',
            'title'         => 'Artikel',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori   = Kategori::all();
        $tags       = Tag::all();
        return view('admin.artikel.tambah', [
            'title'         => 'Tambah Artikel',
            'aktif'         => 'artikel.index',
            'kategori'      => $kategori,
            'tags'          => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'         => 'required',
            'thumbnail'     => 'nullable|mimes:jpeg,png',
            'isi'           => 'required',
            'kategori'      => 'required',
            'tags'          => 'required',
        ]);
        $data = [
            'judul'         => $request->judul,
            'kategori_id'   => $request->kategori,
            'tags'          => $request->tags,
            'url'           => url('artikel/'.str_slug($request->judul)),
            'hit'           => 0,
            'isi'           => $request->isi,
            'user_id'       => Auth::id(),
        ];
        if($request->file('thumbnail')){
            $thumbnail_path = $request->file('thumbnail')->store('public/thumbnail');
            $thumbnail  = url(str_replace('public', 'storage', $thumbnail_path));
            $data['thumbnail'] = $thumbnail;
            $data['thumbnail_path'] = $thumbnail_path;
        }
        Artikel::create($data);
        return redirect()->route('artikel.index')->with('success_msg', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $kategori   = Kategori::all();
        $tags       = Tag::all();
        return view('admin.artikel.ubah', [
            'd'         => $artikel,
            'title'     => 'Ubah Artikel',
            'kategori'      => $kategori,
            'tags'          => $tags,
            'aktif'     => 'artikel.index',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul'         => 'required',
            'thumbnail'     => 'nullable|mimes:jpeg,png',
            'isi'           => 'required',
            'kategori'      => 'required',
            'tags'          => 'required',
        ]);
        $data = [
            'judul'         => $request->judul,
            'kategori_id'   => $request->kategori,
            'tags'          => $request->tags,
            'url'           => url('artikel/'.str_slug($request->judul)),
            'isi'           => $request->isi,
        ];
        if($request->file('thumbnail')){
            $thumbnail_path = $request->file('thumbnail')->store('public/thumbnail');
            $thumbnail  = url(str_replace('public', 'storage', $thumbnail_path));
            $data['thumbnail'] = $thumbnail;
            $data['thumbnail_path'] = $thumbnail_path;
            if(!is_null($artikel->thumbnail_path)){
                if(Storage::exists($artikel->thumbnail_path)){
                    Storage::delete($artikel->thumbnail_path);
                }
            }
        }
        $artikel->update($data);
        return redirect()->route('artikel.index')->with('success_msg', 'Artikel berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        if(!is_null($artikel->thumbnail_path)){
            if(Storage::exists($artikel->thumbnail_path)){
                Storage::delete($artikel->thumbnail_path);
            }
        }
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success_msg', 'Artikel berhasil dihapus');
    }
}
