<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'insan',
            'email' => 'insan@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'paiq',
            'email' => 'paiq@gmail.com',
        ]);
    }
}
