<?php

namespace Database\Factories;
use App\Models\Application;
use App\Models\Customer;
use App\Models\Tender;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    public function definition(): array
    {
        $application = [];
        do {
            $randCustomerId = fake()->numberBetween(1, 1000);
//            $randCustomerId = fake()->numberBetween(1, Customer::count());
            $randTenderId = fake()->numberBetween(1, 1000);
//            $randTenderId = fake()->numberBetween(1, Tender::count());
            $application = Application::where('customer_id', $randCustomerId)->where('tender_id', $randTenderId)->get()->toArray();
        } while ($application);
        return [
            'customer_id' => $randCustomerId,
            'tender_id' => $randTenderId,
            'payment_type' => fake()->numberBetween(1, 3),
            'price' => fake()->randomFloat(2, 0, 100),
        ];
    }
}
