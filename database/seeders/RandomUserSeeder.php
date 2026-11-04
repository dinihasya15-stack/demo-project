<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class RandomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // One known login: tarsoft@gmail.com / password
        User::updateOrCreate(
            ['email' => 'tarsoft@gmail.com'],
            ['name' => 'Tarsoft', 'password' => 'password'],
        );

        // 5 random users via the factory
        // Default password: "password"
        User::factory(5)->create();
    }
}
