<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Panggil UserSeeder
        $this->call([
            UserSeeder::class,
        ]);

        echo "Semua data palsu berhasil dibuat!\n";
    }
}