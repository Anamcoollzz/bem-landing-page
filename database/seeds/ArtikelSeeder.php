<?php

use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	DB::table('artikel')->truncate();
    	$data = [];
    	$faker = \Faker\Factory::create('id_ID');
    	$user = DB::table('users')->take(1)->first()->id;
    	$kategori = DB::table('kategori')->get()->pluck('id')->toArray();
    	$tags = DB::table('kategori')->get()->pluck('nama');
    	foreach (range(1,100) as $i) {
			$judul = str_random(20);
    		$data[] = [
    			'judul'					=> $judul,
    			'isi'					=> $faker->text,
    			'thumbnail'				=> $faker->imageUrl,
    			'user_id'				=> $user,
    			'kategori_id'			=> $faker->randomElement($kategori),
    			'hit'					=> $faker->randomElement(range(1,1000)),
    			'tags'					=> json_encode($tags->take($faker->randomElement(range(1,10)))->toArray()),
    			'url'					=> url('artikel/'.$judul),
    			'thumbnail_path'		=> str_random(20),
    			'created_at'			=> date('Y-m-d H:i:s'),
    			'updated_at'			=> date('Y-m-d H:i:s'),
    		];
    	}
    	DB::table('artikel')->insert($data);
    }
}
