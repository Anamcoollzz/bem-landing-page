<?php

namespace App\Http\Controllers\Admin;

use App\Anggota;
use App\Periode;
use App\AnggotaPeriode;
use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $anggota = [];
        if($request->query('periode')){
            $anggotaP = AnggotaPeriode::where('periode_id', $request->query('periode'))->get();
            if(count($anggotaP) > 0){
                $anggota = Anggota::whereIn('id', $anggotaP->pluck('anggota_id')->toArray())->orderBy('nim')->get();
            }
        }
        return view('admin.anggota.index', [
            'anggota'       => $anggota,
            'aktif'         => 'anggota.index',
            'title'         => 'Anggota',
            'periode'       => Periode::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.anggota.tambah', [
            'periode'       => Periode::all(),
            'title'         => 'Tambah Anggota',
            'aktif'         => 'anggota.index',
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
            'nama'                  => 'required',
            'nim'                   => 'required|numeric',
            'jenis_kelamin'         => 'required',
            'no_hp'                 => 'required',
            'alamat'                => 'required',
            'angkatan'              => 'required|numeric|min:2016',
            'program_studi'         => 'required',
            'foto'                  => 'required|file|mimes:jpeg,png',
            'quotes'                => 'required',
            'email'                 => 'required|email',
            'password'              => 'required|min:5',
            'periode'               => 'required|array',
        ]);
        $data = [
            'nama'                  => $request->nama,
            'nim'                   => $request->nim,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'no_hp'                 => $request->no_hp,
            'alamat'                => $request->alamat,
            'angkatan'              => $request->angkatan,
            'prodi'                 => $request->program_studi,
            'foto'                  => $request->file('foto')->store('public/anggota'),
            'quotes'                => $request->quotes,
            'email'                 => $request->email,
            'password'              => bcrypt($request->password),
        ];
        $anggota = Anggota::create($data);
        foreach ($request->periode as $periode_id) {
            $anggota->periode()->create([
                'periode_id'       => $periode_id,
            ]);
        }
        return redirect()->route('anggota.index')->with('success_msg', 'Anggota berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggotum)
    {
        $anggotum->load('periode');
        return view('admin.anggota.detail', [
            'periode'   => Periode::all(),
            'd'         => $anggotum,
            'title'     => 'Detail Anggota',
            'aktif'     => 'anggota.index',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggotum)
    {
        $anggotum->load('periode');
        return view('admin.anggota.ubah', [
            'periode'   => Periode::all(),
            'd'         => $anggotum,
            'title'     => 'Ubah Anggota',
            'aktif'     => 'anggota.index',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggotum)
    {
        $request->validate([
            'nama'                  => 'required',
            'nim'                   => 'required|numeric',
            'jenis_kelamin'         => 'required',
            'no_hp'                 => 'required',
            'alamat'                => 'required',
            'angkatan'              => 'required|numeric|min:2016',
            'program_studi'         => 'required',
            'foto'                  => 'nullable|file|mimes:jpeg,png',
            'quotes'                => 'required',
            'email'                 => 'required|email',
            'password'              => 'nullable|min:5',
            'periode'               => 'required|array',
        ]);
        $data = [
            'nama'                  => $request->nama,
            'nim'                   => $request->nim,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'no_hp'                 => $request->no_hp,
            'alamat'                => $request->alamat,
            'angkatan'              => $request->angkatan,
            'prodi'                 => $request->program_studi,
            'quotes'                => $request->quotes,
            'email'                 => $request->email,
        ];
        if($request->file('foto'))
            $data['foto']                  = $request->file('foto')->store('public/anggota');
        if($request->password)
            $data['password']                  = bcrypt($request->password);
        $anggotum->update($data);
        $anggotum->periode()->delete();
        foreach ($request->periode as $periode_id) {
            $anggotum->periode()->create([
                'periode_id'       => $periode_id,
            ]);
        }
        return redirect()->route('anggota.index')->with('success_msg', 'Anggota berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggotum)
    {
        $anggotum->delete();
        return redirect()->route('anggota.index')->with('success_msg', 'Anggota berhasil dihapus');
    }
}
