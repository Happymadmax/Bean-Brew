<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Latte', 'Cappuccino', 'Espresso', 'Americano', 'Mocha', 'Macchiato']),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numberBetween(5_00, 15_00),
        ];
    }
}
