<?php

namespace Database\Seeders;

use App\Models\FacultyMasters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultyMastersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacultyMasters::factory(15)->create();
    }
}
