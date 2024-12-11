<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Nigafood;
use App\Models\Nigaprice;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nigaprice>
 */
class NigapriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
          'nigafood_id' => Nigafood::factory(), // Associate a food item
            'amount' => $this->faker->randomFloat(2, 5, 200), // Random price between 5 and 200
            'currency' => $this->faker->currencyCode, // Random currency (USD, EUR, etc.)
        ];
    }
}
