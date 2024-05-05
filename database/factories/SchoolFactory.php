<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $counter = 1;

    public function definition(): array
    {
        $school_type = $this->faker->randomElement(['all', 'Elementary', 'Secondary']);
        switch($school_type){
            case 'all':
                $curricular_classification = ['grade 1', 'grade 2', 'grade 3', 'grade 4', 'grade 5', 'grade 6', 'grade 7', 'grade 8', 'grade 9', 'grade 10', 'grade 11', 'grade 12'];
                break;
            case 'Elementary':
                $curricular_classification = ['grade 1', 'grade 2', 'grade 3', 'grade 4', 'grade 5', 'grade 6'];
                break;
            case 'Secondary':
                $curricular_classification = ['grade 7', 'grade 8', 'grade 9', 'grade 10', 'grade 11', 'grade 12'];
                break;
        }

        return [
            'school_id' => 1188001 . self::$counter++,
            'school_name' => $this->faker->streetName . ' ' . $school_type . ' ' . 'School',
            'address' => $this->faker->address,
            'region' => 'Region 8',
            'division' => 'Division 8',
            'district'  =>  $this->faker->randomElement(['District 1', 'District 2', 'District 3', 'District 4']),
            'email'  => $this->faker->unique()->safeEmail,
            'phone'  => $this->faker->e164PhoneNumber,
            'curricular_classification'  => $curricular_classification
        ];
    }
}
