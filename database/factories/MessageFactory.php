<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->word();
        return [
            'name' => $name,
            'surname' => $this->faker->name(),
            'email' => $this->faker->safeEmail,
            'need' => $this->faker->randomElement(["Passer une commande" , "S'informer de plus sur un produit" , "Demander l'état d'une commande" , "Demander une copie d'une facture"]),
            'message' => $this->faker->paragraph()
        ];
    }
}
