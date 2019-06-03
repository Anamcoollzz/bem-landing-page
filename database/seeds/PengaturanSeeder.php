<?php

use Illuminate\Database\Seeder;
use App\Pengaturan;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::updateOrCreate([
        	'key'		=> 'jumlah_artikel_per_halaman'
        ], [
        	'value'		=> 5,
        ]);
        Pengaturan::updateOrCreate([
        	'key'		=> 'jumlah_karakter_per_view_artikel'
        ], [
        	'value'		=> 200,
        ]);
        Pengaturan::updateOrCreate([
        	'key'		=> 'jumlah_artikel_populer'
        ], [
        	'value'		=> 5,
        ]);
    }
}
