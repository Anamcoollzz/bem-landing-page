<?php

use Illuminate\Database\Seeder;
use App\User;

class GenerateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
        	'email'		=> 'admin@admin.com',
        ], [
        	'nama'		=> 'Hairul Anam',
        	'password'	=> bcrypt('admin'),
        ]);
    }
}
