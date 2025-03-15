<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'type_id' => fake()->numberBetween(1,2),
            'vehicle_id' => 1,
            'value' => fake()->numberBetween(10000,200000),
            'description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => null
        ];
    }
}
