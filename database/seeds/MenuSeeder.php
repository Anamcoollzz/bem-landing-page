<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::updateOrCreate([
        	'nama'	=> 'Dasbor',
        ], [
        	'id'	=> 1,
        	'ikon'	=> 'fa fa-dashboard',
        	'route'	=> 'dasbor',
        ]);
        Menu::updateOrCreate([
        	'nama'	=> 'Artikel',
        ], [
        	'id'	=> 2,
        	'ikon'	=> 'fa fa-edit',
        	'route'	=> 'artikel.index',
        ]);
        Menu::updateOrCreate([
        	'nama'	=> 'Kajian Strategis',
        ], [
        	'id'	=> 3,
        	'ikon'	=> 'fa fa-th',
        	'route'	=> 'kajian-strategis.index',
        ]);
    }
}
