<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PengaturanSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(GenerateAdmin::class);
        $this->call(MenuSeeder::class);
        $this->call(PeriodeSeeder::class);
        $this->call(AnggotaSeeder::class);
        $this->call(ArtikelSeeder::class);
    }
}
