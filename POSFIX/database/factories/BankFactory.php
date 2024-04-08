<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banks>
 */
class BanksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank_name' =>$this->faker->word(),
            'bank_account' => $this->faker->number(int:100),
            'bank_branch' =>$this->faker->word(),
        ];
    }
}
