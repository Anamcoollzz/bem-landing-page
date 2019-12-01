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
        $id = 1;
        Menu::updateOrCreate([
        	'id'	=> $id++,
        ], [
        	'nama'	=> 'Dasbor',
        	'ikon'	=> 'fa fa-dashboard',
        	'route'	=> 'dasbor',
        ]);
        Menu::updateOrCreate([
        	'id'	=> $id++,
        ], [
        	'nama'	=> 'Periode',
        	'ikon'	=> 'fa fa-clock-o',
        	'route'	=> 'periode.index',
        ]);
        Menu::updateOrCreate([
            'id'    => $id++,
        ], [
            'nama'  => 'Anggota',
            'ikon'  => 'fa fa-users',
            'route' => 'anggota.index',
        ]);
        Menu::updateOrCreate([
            'id'    => $id++,
        ], [
            'nama'  => 'Artikel',
            'ikon'  => 'fa fa-edit',
            'route' => 'artikel.index',
        ]);
        Menu::updateOrCreate([
        	'id'	=> $id++,
        ], [
        	'nama'	=> 'Kajian Strategis',
        	'ikon'	=> 'fa fa-th',
        	'route'	=> 'kajian-strategis.index',
        ]);
        Menu::updateOrCreate([
            'id'    => $id++,
        ], [
            'nama'  => 'Lihat Web',
            'ikon'  => 'fa fa-globe',
            'route' => 'beranda',
        ]);
    }
}
