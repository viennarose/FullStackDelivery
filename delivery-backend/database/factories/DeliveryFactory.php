<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerName' => $this->faker->name,
            'order' => $this->faker->randomElement(["Cheese Burger", "Chicken Fillet", "Sophtea Milktea", "Oranges"]),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 10000),
            'quantity' => $this->faker->numberBetween($min=1, $max=50),
            'total' => $this->faker->randomDigit,
        ];
    }
}
