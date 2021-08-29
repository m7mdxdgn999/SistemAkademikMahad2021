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
        $this->call([
            AdminSeeder::class,
            MabnaSeeder::class,
            PembinaanSeeder::class,  
            TahunAkademikSeeder::class,          
            // DosenSeeder::class,

        ]);
    }
}
