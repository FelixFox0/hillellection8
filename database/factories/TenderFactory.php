<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TenderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'text' => 'Lorem ipsum...',
            'road' => fake()->citySuffix() . ' - ' . fake()->citySuffix(),
            'is_closet' => fake()->boolean(),
        ];
    }

}