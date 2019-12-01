<?php

use Illuminate\Database\Seeder;
use App\Periode;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('periode')->truncate();
        Periode::create([
        	'nama'		=> '2018/2019',
        	'status'	=> 'aktif',
        ]);
        Periode::create([
        	'nama'		=> '2019/2020',
        	'status'	=> 'tidak aktif',
        ]);
    }
}
