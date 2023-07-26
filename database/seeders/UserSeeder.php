<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Director',
            'email' => 'director@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Faculty',
            'email' => 'faculty@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Piyush jain',
            'email' => 'piyushjainkgp36@gmail.com',
        ]);

    }
}
