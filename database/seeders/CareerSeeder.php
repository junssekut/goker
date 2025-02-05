<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('career')->insert([
            [
                'id' => 1,
                'name' => '#10279 Senior Android Developer (Logistic)',
                'location' => 'Bengaluru',
                'briefDescription' => 'We are looking for an experienced Senior Android Developer to work on logistics applications in Bengaluru. The role involves creating and maintaining Android apps focused on streamlining logistics operations.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 1, // Assuming "Design" category ID
            ],
            [
                'id' => 2,
                'name' => '3P Channel Business Development Manager',
                'location' => 'Jakarta',
                'briefDescription' => 'As a 3P Channel Business Development Manager in Jakarta, you will be responsible for identifying, developing, and managing third-party channel partnerships to drive growth.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 2, // Assuming "Financial and Accounting" category ID
            ],
            [
                'id' => 3,
                'name' => '3P Channel Strategy Development Manager',
                'location' => 'Jakarta',
                'briefDescription' => 'We are seeking a Strategy Development Manager in Jakarta to enhance our 3P Channel strategies. Your expertise will drive channel growth and optimize relationships.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 2, // Assuming "Financial and Accounting" category ID
            ],
            [
                'id' => 4,
                'name' => 'Account Executive (South Jakarta)',
                'location' => 'Jakarta',
                'briefDescription' => 'We are looking for an Account Executive to work with our clients in South Jakarta. This role involves managing client accounts, ensuring satisfaction, and driving business opportunities.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 3, // Assuming "Marketing and Branding" category ID
            ],
            [
                'id' => 5,
                'name' => 'Android Engineer - Comms Platform',
                'location' => 'Bengaluru',
                'briefDescription' => 'As an Android Engineer in Bengaluru, you will be part of our communications platform team, working to enhance the user experience on Android devices with cutting-edge technology.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 1, // Assuming "Design" category ID
            ],
            [
                'id' => 6,
                'name' => 'Area Expansion Manager (East Java, Bali, and Nusa Tenggara)',
                'location' => 'Surabaya',
                'briefDescription' => 'Looking for an Area Expansion Manager to join our team in Surabaya. This role involves overseeing the expansion of our services and operations across East Java, Bali, and Nusa Tenggara regions.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 2, // Assuming "Financial and Accounting" category ID
            ],
            [
                'id' => 7,
                'name' => 'Area Operations Associate',
                'location' => 'Surabaya',
                'briefDescription' => 'Join our team as an Area Operations Associate in Surabaya. You\'ll be handling the daily operations and ensuring efficiency across the company\'s operational network.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 3, // Assuming "Marketing and Branding" category ID
            ],
            [
                'id' => 8,
                'name' => 'Area Operations Associate (Depok)',
                'location' => 'Depok',
                'briefDescription' => 'We need an Area Operations Associate for Depok. This position will focus on optimizing operations and ensuring the smooth functioning of day-to-day activities in the area.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 1, // Assuming "Design" category ID
            ],
            [
                'id' => 9,
                'name' => 'Area Operations Associate (Medan)',
                'location' => 'Medan',
                'briefDescription' => 'We are hiring an Area Operations Associate for Medan. The role involves managing operations, optimizing efficiency, and ensuring the smooth running of business activities.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 1, // Assuming "Design" category ID
            ],
            [
                'id' => 10,
                'name' => 'Lead Product Manager - GoFood',
                'location' => 'Jakarta',
                'briefDescription' => 'As the Lead Product Manager for GoFood in Jakarta, you will lead product strategy, oversee development, and drive the growth of GoFood\'s platform and user base.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 3, // Assuming "Marketing and Branding" category ID
            ],
            [
                'id' => 11,
                'name' => 'Lead Software Engineer - Engineering Platform',
                'location' => 'Bengaluru',
                'briefDescription' => 'We are looking for a Lead Software Engineer in Bengaluru to join our engineering platform team, focusing on building and maintaining high-performance backend systems.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 2, // Assuming "Financial and Accounting" category ID
            ],
            [
                'id' => 12,
                'name' => 'Senior Data Warehouse Engineer',
                'location' => 'Jakarta',
                'briefDescription' => 'Join us as a Senior Data Warehouse Engineer in Jakarta. In this role, you will manage large data sets and work on the design and optimization of data storage solutions.',
                'method' => 'Onsite',
                'status' => 'Full Time',
                'category_id' => 2, // Assuming "Financial and Accounting" category ID
            ]
        ]);
    }
}
