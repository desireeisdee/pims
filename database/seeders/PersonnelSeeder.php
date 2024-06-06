<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnels')->insert([
            [
                'first_name' => 'John',
                'middle_name' => 'A.',
                'last_name' => 'Doe',
                'name_ext' => '',
                'sex' => 'male',
                'civil_status' => 'married',
                'citizenship' => 'Filipino',
                'blood_type' => 'O',
                'height' => '170',
                'weight' => '70',
                'date_of_birth' => '199-05-21',
                'place_of_birth' => 'Manila',
                'email' => 'johndoe@example.com',
                'tel_no' => '355-5049',
                'mobile_no' => '09102939200',
                'personnel_id' => '4806550',
                'school_id' => 1, // Ensure this matches an existing school_id
                'position_id' => 5, // Ensure this matches an existing job_id
                'appointment' => 'regular',
                'fund_source' => 'nationally funded',
                'salary_grade' => '19',
                'step' => '3',
                'category' => 'SDO Personnel',
                'job_status' => 'active',
                'employment_start' => '2014-04-06',
                'employment_end' => null,
                'tin' => 123456789,
                'sss_num' => 987654321,
                'gsis_num' => 456789123,
                'philhealth_num' => 321654987,
                'pagibig_num' => 654987321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Maria',
                'middle_name' => 'C.',
                'last_name' => 'Ruiz',
                'name_ext' => '',
                'sex' => 'female',
                'civil_status' => 'single',
                'citizenship' => 'Filipino',
                'blood_type' => 'A+',
                'height' => '150',
                'weight' => '60',
                'date_of_birth' => '2000-10-04',
                'place_of_birth' => 'Ormoc City',
                'email' => 'marjolaine.lang@hotmail.com',
                'tel_no' => '355-5049',
                'mobile_no' => '09102939200',
                'personnel_id' => '4661237',
                'school_id' => 1, // Ensure this matches an existing school_id
                'position_id' => 10, // Ensure this matches an existing job_id
                'appointment' => 'regular',
                'fund_source' => 'nationally funded',
                'salary_grade' => '19',
                'step' => '3',
                'category' => 'School Non-teaching Personnel',
                'job_status' => 'active',
                'employment_start' => '2004-02-09',
                'employment_end' => null,
                'tin' => 112345789,
                'sss_num' => 912354321,
                'gsis_num' => 456123123,
                'philhealth_num' => 312354987,
                'pagibig_num' => 654127321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Loraine',
                'middle_name' => null,
                'last_name' => 'Kim',
                'name_ext' => null,
                'sex' => 'female',
                'civil_status' => 'single',
                'citizenship' => 'Filipino',
                'blood_type' => 'B+',
                'height' => '140',
                'weight' => '45',
                'date_of_birth' => '2000-12-12',
                'place_of_birth' => 'Tacloban City',
                'email' => 'kimmikimi.lang@hotmail.com',
                'tel_no' => '355-5049',
                'mobile_no' => '09999956789',
                'personnel_id' => '6291866',
                'school_id' => 1, // Ensure this matches an existing school_id
                'position_id' => 15, // Ensure this matches an existing job_id
                'appointment' => 'regular',
                'fund_source' => 'nationally funded',
                'salary_grade' => '20',
                'step' => '6',
                'category' => 'Elementary School Teacher',
                'job_status' => 'active',
                'employment_start' => '2018-01-01',
                'employment_end' => null,
                'tin' => 112345789,
                'sss_num' => 912354321,
                'gsis_num' => 456123123,
                'philhealth_num' => 312354987,
                'pagibig_num' => 654127321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Lois',
                'middle_name' => 'K.',
                'last_name' => 'Pulinar',
                'name_ext' => '',
                'sex' => 'female',
                'civil_status' => 'single',
                'citizenship' => 'Filipino',
                'blood_type' => 'AB+',
                'height' => '120',
                'weight' => '40',
                'date_of_birth' => '2000-10-10',
                'place_of_birth' => 'Tacloban City',
                'email' => 'pooliinar.lang@hotmail.com',
                'tel_no' => '355-5049',
                'mobile_no' => '09102939200',
                'personnel_id' => '10757',
                'school_id' => 1, // Ensure this matches an existing school_id
                'position_id' => 22, // Ensure this matches an existing job_id
                'appointment' => 'regular',
                'fund_source' => 'nationally funded',
                'salary_grade' => '19',
                'step' => '3',
                'category' => 'Elementary School Teacher',
                'job_status' => 'active',
                'employment_start' => '2018-01-06',
                'employment_end' => null,
                'tin' => 112345789,
                'sss_num' => 912354321,
                'gsis_num' => 456123123,
                'philhealth_num' => 312354987,
                'pagibig_num' => 654127321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Julius',
                'middle_name' => 'C.',
                'last_name' => 'Carlos',
                'name_ext' => 'Sr.',
                'sex' => 'male',
                'civil_status' => 'seperated',
                'citizenship' => 'Filipino',
                'blood_type' => 'B+',
                'height' => '160',
                'weight' => '60',
                'date_of_birth' => '1990-03-03',
                'place_of_birth' => 'Baybay City',
                'email' => 'hululu.lang@hotmail.com',
                'tel_no' => '355-5049',
                'mobile_no' => '09102939200',
                'personnel_id' => '4848606',
                'school_id' => 1, // Ensure this matches an existing school_id
                'position_id' => 25, // Ensure this matches an existing job_id
                'appointment' => 'regular',
                'fund_source' => 'pta',
                'salary_grade' => '19',
                'step' => '3',
                'category' => 'School Non-teaching Personnel',
                'job_status' => 'active',
                'employment_start' => '2020-12-06',
                'employment_end' => null,
                'tin' => 112345789,
                'sss_num' => 912354321,
                'gsis_num' => 456123123,
                'philhealth_num' => 312354987,
                'pagibig_num' => 654127321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Tito',
                'middle_name' => 'C.',
                'last_name' => 'Tita',
                'name_ext' => 'Jr.',
                'sex' => 'male',
                'civil_status' => 'single',
                'citizenship' => 'Filipino',
                'blood_type' => 'O',
                'height' => '180',
                'weight' => '60',
                'date_of_birth' => '1984-08-22',
                'place_of_birth' => 'Baybay City',
                'email' => 'hululu.lang@hotmail.com',
                'tel_no' => '355-5049',
                'mobile_no' => '09102939200',
                'personnel_id' => '6291692',
                'school_id' => 2, // Ensure this matches an existing school_id
                'position_id' => 14, // Ensure this matches an existing job_id
                'appointment' => 'regular',
                'fund_source' => 'nationally funded',
                'salary_grade' => '11',
                'step' => '1',
                'category' => 'Elementary School Teacher',
                'job_status' => 'active',
                'employment_start' => '2016-06-16',
                'employment_end' => null,
                'tin' => 112345789,
                'sss_num' => 912354321,
                'gsis_num' => 456123123,
                'philhealth_num' => 312354987,
                'pagibig_num' => 654127321,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
