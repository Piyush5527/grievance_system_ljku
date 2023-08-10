<?php

namespace Database\Seeders;

use App\Models\Institute_Master;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Institute_MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institute_Master::factory()->create([
            'institute_name'=> 'L.J. Institute of Computer Applications'
        ]);

        Institute_Master::factory(5)->create();
    }
}
