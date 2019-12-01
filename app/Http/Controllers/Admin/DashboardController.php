<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anggota;
use App\AnggotaPeriode;
use App\Periode;
use App\Artikel;

class DashboardController extends Controller
{

	public function index()
	{
		$totalAnggota = Anggota::count();
		$periode = Periode::where('status', 'aktif')->first();
		$anggotaAktif = AnggotaPeriode::where('periode_id', $periode->id)->count();
		$artikel = Artikel::count();
		$kastrat = Artikel::where('kategori_id', '1')->count();
		return view('admin.dashboard.index', [
			'totalAnggota'		=> $totalAnggota,
			'artikel'			=> $artikel,
			'kastrat'			=> $kastrat,
			'anggotaAktif'		=> $anggotaAktif,
			'aktif'				=> 'dasbor',
		]);
	}

	public function keluar()
	{
		\Auth::logout();
		return redirect()->route('login');
	}

}
