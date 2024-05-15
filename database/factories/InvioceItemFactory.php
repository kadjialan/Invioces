<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvioceItem>
 */
class InvioceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invioce_id' => $this->faker->numberBetween(100, 1000),
            'prduct_id' => $this->faker->numberBetween(10,100),
            'unit_price' => $this->faker->numberBetween(100, 5000),
            'quantity' => $this->faker->numberBetween(1,5),
        ];
    }
}
