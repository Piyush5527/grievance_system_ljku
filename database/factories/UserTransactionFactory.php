<?php

namespace Database\Factories;

use App\Models\FacultyMasters;
use App\Models\Student_Master;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTransaction>
 */
class UserTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'enrollment_ref_id' => Student_Master::all()->pluck('enrollment_no')->random(),
            'faculty_ref_id' => FacultyMasters::all()->pluck('faculty_id')->random(),
            'email' => fake()->email(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ];
    }
}
