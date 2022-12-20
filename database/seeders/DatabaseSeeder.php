<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
             
           
            CountryStateCityTableSeeder::class,          
            Refd01Seeder::class,          
            Refd02Seeder::class,          
            Refd03Seeder::class,          
            Refd04Seeder::class,          
            Refd05Seeder::class,          
            Refd06Seeder::class,          
            Refd07Seeder::class,          
            Refd08Seeder::class,          
            Refd09Seeder::class,          
            Refd10Seeder::class,          
            Refd11Seeder::class,          
            Refd12Seeder::class,          
            Refd13Seeder::class,          
            Refd14Seeder::class,          
            Refd15Seeder::class,          
            Refd17Seeder::class,          
             
         
           ]);
    }
}
