<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserCareerSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Retrieve existing user and career ids from the database
        $userIds = \App\Models\User::pluck('id')->toArray(); // Assuming the User model exists
        $careerIds = \App\Models\Career::pluck('id')->toArray(); // Assuming the Career model exists

        // Ensure there are users and careers
        if (empty($userIds) || empty($careerIds)) {
            $this->command->info('No users or careers found. Please ensure users and careers exist before running this seeder.');
            return;
        }

        // Create multiple user-career relationships for each user
        foreach ($userIds as $userId) {
            // Each user will have 3 to 5 usercareer entries (for diversity)
            $careerCount = rand(3, 5); // Randomly assign 3-5 careers per user
            $careersForUser = $faker->randomElements($careerIds, $careerCount);

            foreach ($careersForUser as $careerId) {
                DB::table('usercareer')->insert([
                    'user_id' => $userId,
                    'career_id' => $careerId,
                    'cv' => $faker->word() . '.pdf', // Generating a fake CV filename
                    'score' => $faker->randomFloat(2, 60, 100), // Random score between 60 and 100
                    'psychological_test_score' => $faker->randomFloat(2, 60, 100),
                    'interview_score' => $faker->randomFloat(2, 60, 100),
                    'mcu_score' => $faker->randomFloat(2, 60, 100),
                    'review' => $faker->sentence(), // Fake review text
                    'career_status' => $faker->randomElement(['Applied', 'Psychological Test', 'Interview', 'MCU', 'Accepted']),
                    'date_uploaded' => now(),
                    'date_updated' => now(),
                ]);
            }
        }

        $this->command->info('UserCareer table seeded successfully!');
    }
}
