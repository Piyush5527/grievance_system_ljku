<?php

namespace Database\Seeders;

use App\Models\UserRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRoles::factory()->create([
                'role_id_ref' => 1,
                'user_id_ref' => 1
            ]);
    }
}
