<?php

namespace Database\Seeders;

use App\Models\UserTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserTransaction::factory(10)->create([
            'faculty_ref_id' => null,
            'type'=>'Student'
        ]);

        UserTransaction::factory(10)->create([
            'enrollment_ref_id' => null,
            'type'=>'Faculty'
        ]);

    }
}