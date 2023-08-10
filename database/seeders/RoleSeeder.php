<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'role' => 'super_admin'
        ]);

        Role::factory()->create([
            'role' => 'director'
        ]);

        // Role::factory()->create([
        //     'role' => 'faculty'
        // ]);

        // Role::factory()->create([
        //     'role' => 'student'
        // ]);

        Role::factory()->create([
            'role' => 'HOD'
        ]);

        Role::factory()->create([
            'role' => 'admin'
        ]);

        Role::factory()->create([
            'role' => 'institute_admin'
        ]);

        Role::factory()->create([
            'role' => 'trustee'
        ]);

    }
}
