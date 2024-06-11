<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('personnels')->insert([
        //     [
        //         'first_name' => 'John',
        //         'middle_name' => 'A.',
        //         'last_name' => 'Doe',
        //         'name_ext' => '',
        //         'sex' => 'male',
        //         'civil_status' => 'married',
        //         'citizenship' => 'Filipino',
        //         'blood_type' => 'O',
        //         'height' => '170',
        //         'weight' => '70',
        //         'date_of_birth' => '199-05-21',
        //         'place_of_birth' => 'Manila',
        //         'email' => 'johndoe@example.com',
        //         'tel_no' => '355-5049',
        //         'mobile_no' => '09102939200',
        //         'personnel_id' => '4806550',
        //         'school_id' => 1, // Ensure this matches an existing school_id
        //         'position_id' => 5, // Ensure this matches an existing job_id
        //         'appointment' => 'regular',
        //         'fund_source' => 'nationally funded',
        //         'salary_grade' => '19',
        //         'step' => '3',
        //         'category' => 'SDO Personnel',
        //         'job_status' => 'active',
        //         'employment_start' => '2014-04-06',
        //         'employment_end' => null,
        //         'tin' => 123456789,
        //         'sss_num' => 987654321,
        //         'gsis_num' => 456789123,
        //         'philhealth_num' => 321654987,
        //         'pagibig_num' => 654987321,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'first_name' => 'Maria',
        //         'middle_name' => 'C.',
        //         'last_name' => 'Ruiz',
        //         'name_ext' => '',
        //         'sex' => 'female',
        //         'civil_status' => 'single',
        //         'citizenship' => 'Filipino',
        //         'blood_type' => 'A+',
        //         'height' => '150',
        //         'weight' => '60',
        //         'date_of_birth' => '2000-10-04',
        //         'place_of_birth' => 'Ormoc City',
        //         'email' => 'marjolaine.lang@hotmail.com',
        //         'tel_no' => '355-5049',
        //         'mobile_no' => '09102939200',
        //         'personnel_id' => '4661237',
        //         'school_id' => 1, // Ensure this matches an existing school_id
        //         'position_id' => 10, // Ensure this matches an existing job_id
        //         'appointment' => 'regular',
        //         'fund_source' => 'nationally funded',
        //         'salary_grade' => '19',
        //         'step' => '3',
        //         'category' => 'School Non-teaching Personnel',
        //         'job_status' => 'active',
        //         'employment_start' => '2004-02-09',
        //         'employment_end' => null,
        //         'tin' => 112345789,
        //         'sss_num' => 912354321,
        //         'gsis_num' => 456123123,
        //         'philhealth_num' => 312354987,
        //         'pagibig_num' => 654127321,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'first_name' => 'Loraine',
        //         'middle_name' => null,
        //         'last_name' => 'Kim',
        //         'name_ext' => null,
        //         'sex' => 'female',
        //         'civil_status' => 'single',
        //         'citizenship' => 'Filipino',
        //         'blood_type' => 'B+',
        //         'height' => '140',
        //         'weight' => '45',
        //         'date_of_birth' => '2000-12-12',
        //         'place_of_birth' => 'Tacloban City',
        //         'email' => 'kimmikimi.lang@hotmail.com',
        //         'tel_no' => '355-5049',
        //         'mobile_no' => '09999956789',
        //         'personnel_id' => '6291866',
        //         'school_id' => 1, // Ensure this matches an existing school_id
        //         'position_id' => 15, // Ensure this matches an existing job_id
        //         'appointment' => 'regular',
        //         'fund_source' => 'nationally funded',
        //         'salary_grade' => '20',
        //         'step' => '6',
        //         'category' => 'Elementary School Teacher',
        //         'job_status' => 'active',
        //         'employment_start' => '2018-01-01',
        //         'employment_end' => null,
        //         'tin' => 112345789,
        //         'sss_num' => 912354321,
        //         'gsis_num' => 456123123,
        //         'philhealth_num' => 312354987,
        //         'pagibig_num' => 654127321,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'first_name' => 'Lois',
        //         'middle_name' => 'K.',
        //         'last_name' => 'Pulinar',
        //         'name_ext' => '',
        //         'sex' => 'female',
        //         'civil_status' => 'single',
        //         'citizenship' => 'Filipino',
        //         'blood_type' => 'AB+',
        //         'height' => '120',
        //         'weight' => '40',
        //         'date_of_birth' => '2000-10-10',
        //         'place_of_birth' => 'Tacloban City',
        //         'email' => 'pooliinar.lang@hotmail.com',
        //         'tel_no' => '355-5049',
        //         'mobile_no' => '09102939200',
        //         'personnel_id' => '10757',
        //         'school_id' => 1, // Ensure this matches an existing school_id
        //         'position_id' => 22, // Ensure this matches an existing job_id
        //         'appointment' => 'regular',
        //         'fund_source' => 'nationally funded',
        //         'salary_grade' => '19',
        //         'step' => '3',
        //         'category' => 'Elementary School Teacher',
        //         'job_status' => 'active',
        //         'employment_start' => '2018-01-06',
        //         'employment_end' => null,
        //         'tin' => 112345789,
        //         'sss_num' => 912354321,
        //         'gsis_num' => 456123123,
        //         'philhealth_num' => 312354987,
        //         'pagibig_num' => 654127321,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'first_name' => 'Julius',
        //         'middle_name' => 'C.',
        //         'last_name' => 'Carlos',
        //         'name_ext' => 'Sr.',
        //         'sex' => 'male',
        //         'civil_status' => 'seperated',
        //         'citizenship' => 'Filipino',
        //         'blood_type' => 'B+',
        //         'height' => '160',
        //         'weight' => '60',
        //         'date_of_birth' => '1990-03-03',
        //         'place_of_birth' => 'Baybay City',
        //         'email' => 'hululu.lang@hotmail.com',
        //         'tel_no' => '355-5049',
        //         'mobile_no' => '09102939200',
        //         'personnel_id' => '4848606',
        //         'school_id' => 1, // Ensure this matches an existing school_id
        //         'position_id' => 25, // Ensure this matches an existing job_id
        //         'appointment' => 'regular',
        //         'fund_source' => 'pta',
        //         'salary_grade' => '19',
        //         'step' => '3',
        //         'category' => 'School Non-teaching Personnel',
        //         'job_status' => 'active',
        //         'employment_start' => '2020-12-06',
        //         'employment_end' => null,
        //         'tin' => 112345789,
        //         'sss_num' => 912354321,
        //         'gsis_num' => 456123123,
        //         'philhealth_num' => 312354987,
        //         'pagibig_num' => 654127321,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'first_name' => 'Tito',
        //         'middle_name' => 'C.',
        //         'last_name' => 'Tita',
        //         'name_ext' => 'Jr.',
        //         'sex' => 'male',
        //         'civil_status' => 'single',
        //         'citizenship' => 'Filipino',
        //         'blood_type' => 'O',
        //         'height' => '180',
        //         'weight' => '60',
        //         'date_of_birth' => '1984-08-22',
        //         'place_of_birth' => 'Baybay City',
        //         'email' => 'hululu.lang@hotmail.com',
        //         'tel_no' => '355-5049',
        //         'mobile_no' => '09102939200',
        //         'personnel_id' => '6291692',
        //         'school_id' => 2, // Ensure this matches an existing school_id
        //         'position_id' => 14, // Ensure this matches an existing job_id
        //         'appointment' => 'regular',
        //         'fund_source' => 'nationally funded',
        //         'salary_grade' => '11',
        //         'step' => '1',
        //         'category' => 'Elementary School Teacher',
        //         'job_status' => 'active',
        //         'employment_start' => '2016-06-16',
        //         'employment_end' => null,
        //         'tin' => 112345789,
        //         'sss_num' => 912354321,
        //         'gsis_num' => 456123123,
        //         'philhealth_num' => 312354987,
        //         'pagibig_num' => 654127321,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);

        $personnelId = 3;

        // Addresses
        // DB::table('addresses')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'address_type' => 'permanent',
        //         'house_no' => '123',
        //         'street' => 'Main St',
        //         'subdivision' => 'Sunshine Village',
        //         'barangay' => 'Barangay Uno',
        //         'city' => 'Metro City',
        //         'province' => 'Metro Province',
        //         'region' => 'Region IV-A',
        //         'zip_code' => '12345',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'personnel_id' => $personnelId,
        //         'address_type' => 'residential',
        //         'house_no' => '456',
        //         'street' => 'Second St',
        //         'subdivision' => 'Moonlight Subdivision',
        //         'barangay' => 'Barangay Dos',
        //         'city' => 'Metro City',
        //         'province' => 'Metro Province',
        //         'region' => 'Region IV-A',
        //         'zip_code' => '12346',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Contact Person
        // DB::table('contact_person')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'name' => 'John Doe',
        //         'email' => 'johndoe@example.com',
        //         'mobile_no' => '09171234567',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Family
        // DB::table('family')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'relationship' => 'father',
        //         'first_name' => 'Juan',
        //         'middle_name' => 'Santos',
        //         'last_name' => 'Dela Cruz',
        //         'name_ext' => null,
        //         'occupation' => 'Engineer',
        //         'employer_business_name' => 'ABC Engineering',
        //         'business_address' => '789 Industrial Park, Metro City',
        //         'telephone_number' => '123-4567',
        //         'date_of_birth' => '1955-01-01',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'personnel_id' => $personnelId,
        //         'relationship' => 'mother',
        //         'first_name' => 'Maria',
        //         'middle_name' => 'Reyes',
        //         'last_name' => 'Dela Cruz',
        //         'name_ext' => null,
        //         'occupation' => 'Teacher',
        //         'employer_business_name' => 'Metro City High School',
        //         'business_address' => '101 School St, Metro City',
        //         'telephone_number' => '234-5678',
        //         'date_of_birth' => '1960-02-02',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Educations
        // DB::table('educations')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'type' => 'elementary',
        //         'school_name' => 'Metro City Elementary School',
        //         'degree_course' => null,
        //         'major' => null,
        //         'minor' => null,
        //         'period_from' => 2000,
        //         'period_to' => 2006,
        //         'highest_level_units' => null,
        //         'year_graduated' => 2006,
        //         'scholarship_honors' => null,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'personnel_id' => $personnelId,
        //         'type' => 'secondary',
        //         'school_name' => 'Metro City High School',
        //         'degree_course' => null,
        //         'major' => null,
        //         'minor' => null,
        //         'period_from' => 2006,
        //         'period_to' => 2010,
        //         'highest_level_units' => null,
        //         'year_graduated' => 2010,
        //         'scholarship_honors' => 'Valedictorian',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'personnel_id' => $personnelId,
        //         'type' => 'graduate',
        //         'school_name' => 'State University',
        //         'degree_course' => 'Bachelor of Science in Computer Science',
        //         'major' => 'Software Engineering',
        //         'minor' => 'Data Science',
        //         'period_from' => 2010,
        //         'period_to' => 2014,
        //         'highest_level_units' => null,
        //         'year_graduated' => 2014,
        //         'scholarship_honors' => 'Cum Laude',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Civil Service Eligibility
        // DB::table('civil_service_eligibility')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'title' => 'Civil Service Professional',
        //         'rating' => '85.75',
        //         'date_of_exam' => '2015-05-20',
        //         'place_of_exam' => 'Metro City',
        //         'license_num' => 'CSP-123456',
        //         'license_date_of_validity' => '2025-05-20',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Work Experiences
        // DB::table('work_experiences')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'title' => 'Software Developer',
        //         'company' => 'Tech Solutions Inc.',
        //         'inclusive_from' => '2014-06-01',
        //         'inclusive_to' => '2018-08-15',
        //         'monthly_salary' => '50000',
        //         'paygrade_step_increment' => 'PG-10',
        //         'appointment' => 'Permanent',
        //         'is_gov_service' => false,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'personnel_id' => $personnelId,
        //         'title' => 'Senior Software Engineer',
        //         'company' => 'Innovative Tech Corp.',
        //         'inclusive_from' => '2018-09-01',
        //         'inclusive_to' => '2022-12-31',
        //         'monthly_salary' => '70000',
        //         'paygrade_step_increment' => 'PG-12',
        //         'appointment' => 'Permanent',
        //         'is_gov_service' => false,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Voluntary Works
        // DB::table('voluntary_works')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'organization' => 'Community Outreach Program',
        //         'position' => 'Volunteer Teacher',
        //         'inclusive_from' => '2016-06-01',
        //         'inclusive_to' => '2017-06-01',
        //         'hours' => 120,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Training Certifications
        // DB::table('training_certifications')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'training_seminar_title' => 'Advanced Software Development',
        //         'type' => 'Seminar',
        //         'sponsored' => 'Tech Innovations Ltd.',
        //         'inclusive_from' => '2019-03-15',
        //         'inclusive_to' => '2019-03-20',
        //         'hours' => 40,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // References
        // DB::table('references')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'full_name' => 'Jane Smith',
        //         'address' => '789 Elm St, Metro City',
        //         'tel_no' => '345-6789',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Assignment Details
        // DB::table('assignment_details')->insert([
        //     [
        //         'personnel_id' => $personnelId,
        //         'assignment' => 'Math Teacher',
        //         'dtr_day' => 'Monday',
        //         'dtr_from' => '08:00:00',
        //         'dtr_to' => '17:00:00',
        //         'teaching_minutes_per_week' => 1200,
        //         'school_year' => '2023-2024',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]
        // ]);

        // // Personnel Details
        // DB::table('personnel_details')->insert([
        //     'personnel_id' => $personnelId,
        //     'consanguinity_third_degree' => false,
        //     'consanguinity_third_degree_details' => null,
        //     'consanguinity_fourth_degree' => false,
        //     'consanguinity_fourth_degree_details' => null,
        //     'found_guilty_administrative_offense' => false,
        //     'administrative_offense_details' => null,
        //     'criminally_charged' => false,
        //     'criminally_charged_details' => null,
        //     'criminally_charged_date_filed' => null,
        //     'criminally_charged_status' => null,
        //     'convicted_crime' => false,
        //     'convicted_crime_details' => null,
        //     'separated_from_service' => false,
        //     'separation_details' => null,
        //     'candidate_last_year' => false,
        //     'candidate_details' => null,
        //     'resigned_to_campaign' => false,
        //     'resigned_campaign_details' => null,
        //     'immigrant_status' => false,
        //     'immigrant_country_details' => null,
        //     'member_indigenous_group' => false,
        //     'indigenous_group_details' => null,
        //     'person_with_disability' => false,
        //     'disability_id_no' => null,
        //     'solo_parent' => false,
        //     'solo_parent_id_no' => null,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // Special Skills
        DB::table('other_information')->insert([
            [
                'personnel_id' => $personnelId,
                'type' => 'special_skill',
                'name' => 'Curriculum Development'
            ],
            [
                'personnel_id' => $personnelId,
                'type' => 'special_skill',
                'name' => 'Educational Technology'
            ],
            [
                'personnel_id' => $personnelId,
                'type' => 'special_skill',
                'name' => 'Differentiated Instruction'
            ],
            [
                'personnel_id' => $personnelId,
                'type' => 'special_skill',
                'name' => 'Student Counseling'
            ],
            [
                'personnel_id' => $personnelId,
                'type' => 'special_skill',
                'name' => 'Project-Based Learning'
            ]
        ]);

        // Non-academic Distinctions / Recognition
        DB::table('other_information')->insert([
            [
                'personnel_id' => $personnelId,
                'type' => 'nonacademic_distinction',
                'name' => 'Metro City Council Best Community Service'
            ],
            [
                'personnel_id' => $personnelId,
                'type' => 'nonacademic_distinction',
                'name' => 'Community Outreach Program Outstanding Volunteer'
            ]
        ]);
    }
}
