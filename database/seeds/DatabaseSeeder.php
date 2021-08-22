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
        $this->call(SansTuruSeeder::class);
        $this->call(KullaniciSeeder::class);
        $this->call(SansKolonuEkleSeeder::class);
    }
}
