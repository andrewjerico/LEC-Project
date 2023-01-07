<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PlaceSeeder;
use Database\Seeders\ProvinceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProvinceSeeder::class,
            PlaceSeeder::class,
            UserSeeder::class
        ]);
    }
}
