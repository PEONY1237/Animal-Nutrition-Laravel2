<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CIN'=> $this->faker->sentence(),
            'Nom_Client' => $this->faker->name(),
            'Prenom_Client' => $this->faker->name(),
            'Email_Client' => $this->faker->safeEmail,
            'Password_Client' => $this->faker->password, // password
            'Telephone' => $this->faker->phoneNumber
        ];
    }
}
