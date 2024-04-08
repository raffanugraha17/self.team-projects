<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CashierList>
 */
class CashierListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cashier_name' =>$this->faker->word(),
            'cashier_telephone' => $this->faker->number(int:100),
            'cashier_role' => $this->faker->number(int:100),
            'cashier_shift' =>$this->faker->word(),
            'cashier_gender' =>$this->faker->word(),
        ];
    }
}
