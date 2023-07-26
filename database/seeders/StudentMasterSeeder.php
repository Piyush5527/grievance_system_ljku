<?php

namespace Database\Seeders;

use App\Models\Student_Master;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student_Master::factory(30)->create();
    }
}
