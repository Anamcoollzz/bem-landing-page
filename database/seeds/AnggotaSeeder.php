<?php

use Illuminate\Database\Seeder;
use App\Anggota;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	DB::table('anggota')->truncate();
    	DB::table('anggota_periode')->truncate();
    	$data = [];
    	$faker = \Faker\Factory::create('id_ID');
    	foreach (range(1,100) as $i) {
    		$email = $faker->email;
    		$data = [
    			'nama'                  => $faker->name,
    			'nim'                   => $faker->nik,
    			'jenis_kelamin'         => $faker->randomElement(['Laki-laki', 'Perempuan']),
    			'no_hp'                 => $faker->phoneNumber,
    			'alamat'                => $faker->address,
    			'angkatan'              => $faker->randomElement([2016, 2017,]),
    			'prodi'                 => $faker->randomElement(['Sistem Informasi', 'Teknologi Informasi']),
    			'foto'                  => 'storage/public/anggota/'.str_random(20).'.jpg',
    			'quotes'                => $faker->text,
    			'email'                 => $email,
    			'password'              => bcrypt($email),
    			'created_at'			=> date('Y-m-d H:i:s'),
    			'updated_at'			=> date('Y-m-d H:i:s'),
    		];
    	}
    	$anggota = Anggota::insert($data);
    	$anggota = Anggota::all();
    	$periode = DB::table('periode')->get()->pluck('id')->toArray();
    	$dataAnggotaPeriode = [];
    	foreach ($anggota as $a) {
    		$dataAnggotaPeriode[] = [
    			'periode_id'		=> $faker->randomElement($periode),
    			'anggota_id'		=> $a->id,
    			'created_at'	    => date('Y-m-d H:i:s'),
    			'updated_at'	    => date('Y-m-d H:i:s'),
    		];
    	}
    	$periode = DB::table('anggota_periode')->insert($dataAnggotaPeriode);
    }
}
