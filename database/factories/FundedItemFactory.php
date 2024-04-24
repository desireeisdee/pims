<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FundedItem>
 */
class FundedItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->secondaryAddress() .$this->faker->stateAbbr(),
            'non_teaching' => $this->faker->boolean(),
            'incumbent' => $this->faker->numberBetween(35, 100),
        ];
    }
}
