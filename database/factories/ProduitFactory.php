<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom_Produit' => $this->faker->randomElement(['cow-product' , 'goat-product' , 'rabbit-product' , 'cat-product' , 'dog-product' , 'snail-product' , 'horse-product' , 'chicken-product']),
            'ID_Categorie' => 1,
            'Img_Produit' => $this->faker->image,
            'Protein' => $this->faker->numberBetween(0,20),
            'Sodium' => $this->faker->numberBetween(0,20),
            'Magnesium' => $this->faker->numberBetween(0,20),
            'Potassium' => $this->faker->numberBetween(0,20),
            'Cobalt' => $this->faker->numberBetween(0,20),
            'Manganese' => $this->faker->numberBetween(0,20),
            'Zinc' => $this->faker->numberBetween(0,20),
            'Iodine' => $this->faker->numberBetween(0,20),
            'Vitamin_A' => $this->faker->numberBetween(0,20),
            'Vitamin_D' => $this->faker->numberBetween(0,20),
            'Vitamin_E' => $this->faker->numberBetween(0,20)
        ];
    }
}
