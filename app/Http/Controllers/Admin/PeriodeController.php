<?php

namespace App\Http\Controllers\Admin;

use App\Periode;
use App\Tag;
use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Auth;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = Periode::all();
        return view('admin.periode.index', [
            'periode'       => $periode,
            'aktif'         => 'periode.index',
            'title'         => 'Periode',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.periode.tambah', [
            'title'         => 'Tambah Periode',
            'aktif'         => 'periode.index',
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
            'periode'         => 'required',
        ]);
        Periode::where('id', '>', 0)->update([
            'status'          => 'tidak aktif',
        ]);
        $data = [
            'nama'      => $request->periode,
        ];
        Periode::create($data);
        return redirect()->route('periode.index')->with('success_msg', 'Periode berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(Periode $periode)
    {
        return view('admin.periode.ubah', [
            'd'         => $periode,
            'title'     => 'Ubah Periode',
            'aktif'     => 'periode.index',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periode $periode)
    {
        $request->validate([
            'periode'         => 'required',
        ]);
        $data = [
            'nama'         => $request->periode,
        ];
        $periode->update($data);
        return redirect()->route('periode.index')->with('success_msg', 'Periode berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periode $periode)
    {
        $periode->delete();
        return redirect()->route('periode.index')->with('success_msg', 'Periode berhasil dihapus');
    }

    public function ubahStatus(Periode $periode)
    {
        Periode::where('id', '>', 0)->update([
            'status'          => 'tidak aktif',
        ]);
        $status = $periode->status == 'aktif' ? 'tidak aktif' : 'aktif';
        $periode->update([
            'status'        => $status
        ]);
        return redirect()->route('periode.index')->with('success_msg', 'Status periode berhasil diubah ke '.$status);
    }
}
