<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $tag) {
        	Tag::updateOrCreate([
        		'nama'	=> 'Tag '.$tag,
        	]);
        }
    }
}
