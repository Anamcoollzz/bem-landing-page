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
        	'email'		=> 'admin@bemfasilkom.com',
        ], [
        	'nama'		=> 'Admin BEM Fasilkom',
        	'password'	=> bcrypt('admin'),
        ]);
    }
}
