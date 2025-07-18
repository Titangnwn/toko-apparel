<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan ProdukSeeder
        $this->call([
            ProdukSeeder::class,
        ]);
        // Jalankan AdminSeeder
        $this->call(AdminSeeder::class);

    }
}
