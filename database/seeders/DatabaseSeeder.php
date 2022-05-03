<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            SampleSeeder::class,
            SliderSeeder::class,
            AboutSeeder::class,
            AboutDetailSeeder::class,
            ShippingSeeder::class,
            ContactSeeder::class,
            SampleTypeSeeder::class,
            CarBrandSeeder::class,
            CarModelSeeder::class,
            PirceSeeder::class,
        ]);
    }
}
