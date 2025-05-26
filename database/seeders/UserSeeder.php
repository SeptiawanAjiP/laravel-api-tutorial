<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Bikin 100 user palsu
        User::factory()
            ->count(100)
            ->create();

        echo "Yeay! 100 user palsu berhasil dibuat!\n";
    }
}