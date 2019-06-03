<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    public function sub()
    {
    	return $this->hasMany('App\Menu', 'parent');
    }
}
