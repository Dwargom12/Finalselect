<?php

namespace Database\Factories;
use App\Models\Nigafood;
use App\Models\Nigaprice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nigafood>
 */
class NigafoodFactory extends Factory
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
            'name' => $this->faker->randomElement([
            'Pizza', 'Burger', 'Pasta', 'Sushi', 'Tacos', 'Salad', 'Ice Cream', 'Steak', 'Hot Dog', 'Soup'
        ]), // Random food name
            'description' => $this->faker->sentence, // Random food description
            
        ];
    }
}
