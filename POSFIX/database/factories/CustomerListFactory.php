<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerList>
 */
class CustomerListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' =>$this->faker->word(),
            'customer_telephone' => $this->faker->number(int:100),
            'customer_age' => $this->faker->number(int:100),
            'customer_occupation' =>$this->faker->word(),
            'customer_address' =>$this->faker->word(),
            'customer_gender' =>$this->faker->word(),
        ];
    }
}
