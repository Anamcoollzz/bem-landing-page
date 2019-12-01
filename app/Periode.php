<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{

	protected $table = 'periode';

	protected $fillable = [
		'nama', 'status',
	];

	protected $appends = [
		'status_label',
	];

	public function getStatusLabelAttribute()
	{
		if($this->status == 'aktif')
			return '<span class="label label-success">'.$this->status.'</span>';
		return '<span class="label label-danger">'.$this->status.'</span>';
	}
}
