<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Semester::factory()->create([
            'semester_no' => 1
        ]);
        Semester::factory()->create([
            'semester_no' => 2
        ]);
        Semester::factory()->create([
            'semester_no' => 3
        ]);
        Semester::factory()->create([
            'semester_no' => 4
        ]);
        Semester::factory()->create([
            'semester_no' => 5
        ]);
        Semester::factory()->create([
            'semester_no' => 6
        ]);
        Semester::factory()->create([
            'semester_no' => 7
        ]);
        Semester::factory()->create([
            'semester_no' => 8
        ]);
        Semester::factory()->create([
            'semester_no' => 9
        ]);
        Semester::factory()->create([
            'semester_no' => 10
        ]);
    }
}
