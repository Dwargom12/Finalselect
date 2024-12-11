<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nigafood;
use App\Models\Nigaprice;
use Illuminate\Database\Eloquent\Factories\Sequence;

class NigafoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create 10 food items
        Nigafood::factory(10) // Adjust the number as needed
            ->create()
            ->each(function ($food) {
                // For each food item, create a price and associate it with the food
                Nigaprice::factory()->create([
                   'nigafood_id' => $food->id, // Correctly associate the price with the food
                    'amount' => $food->price,   // Use food's price from the food factory
                    'currency' => 'USD',        // You can adjust currency as needed
                ]);
            });
    }
}
