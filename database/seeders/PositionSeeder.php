<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**2
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTitles = [
            'Information Technology Officer I',
            'Nurse I',
            'Nurse II',
            'Librarian',
            'Guidance Counselor I',
            'Guidance Counselor II',
            'Assistant School Principal II',
            'School Principal I',
            'School Principal II',
            'School Principal III',
            'School Principal IV',
            'Head Teacher I',
            'Head Teacher II',
            'Head Teacher III',
            'Head Teacher IV',
            'Master Teacher I',
            'Master Teacher II',
            'Master Teacher III',
            'Teacher I',
            'Teacher II',
            'Teacher III',
            'Special Education Teacher I',
            'Special Education Teacher II',
            'Special Education Teacher III',
            'Administrative Officer V',
            'Administrative Officer IV',
            'Administrative Officer II',
            'Administrative Officer I',
            'Administrative Assistant III',
            'Administrative Assistant II',
            'Administrative Assistant I',
            'Administrative Aide VI',
            'Administrative Aide IV',
            'Administrative Aide III',
            'Administrative Aide I',
            'Watchman I',
        ];

        foreach ($jobTitles as $title) {
            DB::table('position')->insert([
                'title' => $title,
                'classification' => 'teaching',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
