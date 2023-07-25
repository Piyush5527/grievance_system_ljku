<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserRolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role_id_ref' => Role::all()->random()->id,
            'user_id_ref' => User::all()->random()->id,
        ];
    }
}
