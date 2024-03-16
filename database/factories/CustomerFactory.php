<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'user_name' => fake()->unique()->firstName(),
//            'created_at' => now(),
//            'updated_at' => now(),
        ];
    }
}
