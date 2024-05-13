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
            'name_ext' => $this->faker->suffix,
            'sex'  =>  $this->faker->randomElement(['male', 'female']),
            'civil_status' => $this->faker->randomElement(['single', 'married', 'widowed', 'divorced', 'others']),
            'citizenship' => 'Filipino',
            'blood_type' => $this->faker->randomElement(['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-']),
            'height' => $this->faker->numberBetween(1.3, 1.8),
            'weight' => $this->faker->numberBetween(48, 80),
            'date_of_birth' => $this->faker->dateTimeBetween('-60 years', '-20 years'),
            'place_of_birth' => $this->faker->city,
            'email'  => $this->faker->unique()->safeEmail,
            'tel_no'  => $this->faker->tollFreePhoneNumber,
            'mobile_no'  => $this->faker->e164PhoneNumber,
            'employment_start'  => $this->faker->dateTimeBetween('-1000 week'),
            'job_title'  => $this->faker->randomElement(['Teacher I', 'Teacher II', 'Teacher III', 'School Head']),
            'job_status'  => $this->faker->randomElement(['active','vacation', 'terminated', 'on leave', 'suspended', 'resigned', 'probation', 'contract', 'part-time']),
        ];
    }
}
