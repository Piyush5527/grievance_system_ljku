<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::factory()->create([
            'department' => 'MCA',
            'institute_ref_id' => 1
        ]);
        Department::factory()->create([
            'department' => 'IMCA',
            'institute_ref_id' => 1

        ]);
        Department::factory()->create([
            'department' => 'MscIT',
            'institute_ref_id' => 1

        ]);

    }
}
