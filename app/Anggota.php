<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
	protected $table = 'anggota';

	protected $fillable = [
		'nama',
		'nim',
		'jenis_kelamin',
		'no_hp',
		'alamat',
		'angkatan',
		'prodi',
		'foto',
		'quotes',
		'email',
		'password',
		'remember_token',
	];

	protected $appends = [
		'foto_url',
	];

	public function getFotoUrlAttribute()
	{
		return asset(\Storage::url($this->foto));
	}

	public function periode()
	{
		return $this->hasMany('App\AnggotaPeriode', 'anggota_id');
	}
}
