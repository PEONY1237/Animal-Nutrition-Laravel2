<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom_Admin' => $this->faker->name(),
            'Prenom_Admin' => $this->faker->name(),
            'Email_Admin' => $this->faker->safeEmail,
            'Password_Admin' => $this->faker->password, // password
        ];
    }
}
