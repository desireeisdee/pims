<?php

namespace Database\Seeders;

// use App\Models\User;
use App\Models\School;
use App\Models\FundedItem;
use App\Models\AppointmentsFunding;
use App\Models\Personnel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
                SchoolSeeder::class
            ]);

        School::factory()->count(5)->create()->each(function ($school) {
            // For each school, create 10 personnel
            $school->personnels()->saveMany(Personnel::factory()->count(5)->make());
            $school->funded_items()->saveMany(FundedItem::factory()->count(5)->make());
            $school->appointments_fundings()->saveMany(AppointmentsFunding::factory()->count(5)->make());
        });
    }
}
