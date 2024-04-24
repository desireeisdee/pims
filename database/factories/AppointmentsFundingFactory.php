<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppointmentsFunding>
 */
class AppointmentsFundingFactory extends Factory
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
            'appointment' => $this->faker->randomElement(['Contractual', 'Substitute', 'Volunteer',  'Others']),
            'fund_source' => $this->faker->randomElement(['SEF', 'PTA', 'NGO', 'etc']),
            'incumbent_teaching' => $this->faker->numberBetween(35, 100),
            'incumbent_non_teaching' => $this->faker->numberBetween(35, 100),
        ];
    }
}
