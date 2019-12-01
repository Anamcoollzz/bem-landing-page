<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaPeriode extends Model
{
    protected $table = 'anggota_periode';

	protected $fillable = [
		'anggota_id', 'periode_id',
	];

	public function periode()
	{
		return $this->belongsTo('App\Periode', 'periode_id');
	}
}
