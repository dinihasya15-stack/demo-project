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
        // One known admin 
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => 'asdqwe123',
        ]);

        // 5 random users via the factory
        // Default password: "password"
        User::factory(5)->create();
    }
}
