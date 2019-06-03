<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

	protected $table = 'artikel';

	protected $fillable = [
		'judul',
		'isi',
		'thumbnail',
		'user_id',
		'kategori_id',
		'hit',
		'tags',
		'url',
		'thumbnail_path',
	];

	protected $casts = [
		'tags'	=> 'array',
	];

	protected $appends = [
		'tanggal',
	];

	public function kategori()
	{
		return $this->belongsTo('App\Kategori', 'kategori_id');
	}

	public function author()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	public function getTanggalAttribute()
	{
		$thn = substr($this->created_at, 0, 4);
		$bln = substr($this->created_at, 5, 2);
		$tgl = substr($this->created_at, 8, 2);
		return $tgl.' '.namaBulan($bln).' '.$thn;
	}

}
