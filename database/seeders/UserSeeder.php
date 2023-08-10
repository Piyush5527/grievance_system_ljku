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
            'role' => 1,
        ]);

        User::factory()->create([
            'name' => 'Director',
            'email' => 'director@gmail.com',
            'role' => 2
        ]);

        User::factory()->create([
            'name' => 'HOD',
            'email' => 'hod@gmail.com',
            'role' => 3
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 4
        ]);

        User::factory()->create([
            'name' => 'institute admin',
            'email' => 'instituteadmin@gmail.com',
            'role' => 5
        ]);

        User::factory()->create([
            'name' => 'Trustee',
            'email' => 'trustee@gmail.com',
            'role' => 6
        ]);


    }
}
