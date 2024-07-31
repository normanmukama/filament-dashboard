<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
// use Database\Seeders\CountrySeeder;
// use Database\Seeders\CitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class
            // Add other seeders here if needed
        ]);
    }
}



