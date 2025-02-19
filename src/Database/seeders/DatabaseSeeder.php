<?php

namespace laravel\lokasyon\Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            LocationSeeder::class,
        ]);

      
    }
}
