<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Pengaturan;
use App\Kategori;
use App\Tag;

class ArtikelController extends Controller
{

	private function menuKanan()
	{
		$jumlah_artikel_populer = Pengaturan::where('key', 'jumlah_artikel_populer')->first()->value;
		$artikel_populer = Artikel::orderBy('hit', 'desc')->take($jumlah_artikel_populer)->get();
		$kategori_artikel = Kategori::withCount('artikel')->get();
		$tags = Tag::all();
		$data = [
			'artikel_populer'					=> $artikel_populer,
			'kategori_artikel'					=> $kategori_artikel,
			'tags'								=> $tags,
		];
		return $data;
	}

	public function single($uri)
	{
		$artikel = Artikel::where('url', url('artikel/'.$uri))->first();
		if(is_null($artikel))
			abort(404);
		$artikel->hit++;
		$artikel->save();
		$artikel_setelahnya = Artikel::where('id', '<', $artikel->id)->first();
		$artikel_sebelumnya = Artikel::where('id', '>', $artikel->id)->first();
		return view('artikel.single', [
			'artikel'				=> $artikel,
			'artikel_sebelumnya'	=> $artikel_sebelumnya,
			'artikel_setelahnya'	=> $artikel_setelahnya,
		]+$this->menuKanan());
	}

	public function all()
	{
		$jumlah_artikel_per_halaman = Pengaturan::where('key', 'jumlah_artikel_per_halaman')->first()->value;
		$jumlah_karakter_per_view_artikel = Pengaturan::where('key', 'jumlah_karakter_per_view_artikel')->first()->value;
		$tags = request()->query('tags');
		$search = request()->query('search');
		if($search){
			$artikel = Artikel::where('tags', 'like', '%'.$search.'%')
			->orWhere('judul', 'like', '%'.$search.'%')
			->orWhere('isi', 'like', '%'.$search.'%')
			->latest()->paginate($jumlah_artikel_per_halaman);
		}else{
			if($tags)
				$artikel = Artikel::where('tags', 'like', '%'.$tags.'%')->latest()->paginate($jumlah_artikel_per_halaman);
			else
				$artikel = Artikel::latest()->paginate($jumlah_artikel_per_halaman);
		}
		return view('artikel.all', [
			'artikel'							=> $artikel,
			'jumlah_karakter_per_view_artikel'	=> $jumlah_karakter_per_view_artikel,
		]+$this->menuKanan());
	}

}
