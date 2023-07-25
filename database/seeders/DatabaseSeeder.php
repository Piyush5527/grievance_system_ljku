<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Piyush jain',
            'email' => 'piyushjainkgp36@gmail.com',
        ]);

        $this->call(RoleSeeder::class);
        $this->call(UserRoleSeeder::class);
    }
}
