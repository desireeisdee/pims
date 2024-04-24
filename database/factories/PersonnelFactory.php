<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $counter = 1;

    public function definition(): array
    {
        return [
            'personnel_id' => 312300 . self::$counter++,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->dateTimeBetween('-3000 week', '-1000 week'),
            'sex'  =>  $this->faker->randomElement(['male', 'female']),
            'address'  => $this->faker->address,
            'email'  => $this->faker->unique()->safeEmail,
            'phone'  => $this->faker->e164PhoneNumber,
            'employment_start'  => $this->faker->dateTimeBetween('-1000 week'),
            'job_title'  => $this->faker->randomElement(['Teacher I', 'Teacher II', 'Teacher III', 'School Head']),
            'job_status'  => $this->faker->randomElement(['active','vacation', 'terminated', 'on leave', 'suspended', 'resigned', 'probation', 'contract', 'part-time']),
            'division'  => 8,
            'district'  => $this->faker->randomElement(['I', 'II', 'III', 'IV']),
        ];
    }
}
