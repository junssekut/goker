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
        DB::table('career')->insert(
            [
                [
                    'id' => '1', //1
                    'name'=> '#10279 Senior Android Developer (Logistic)',
                    'location' => 'Bengaluru',
                ],
                [
                    'id' => '2', //2
                    'name'=> '3P Channel Business Development Manager',
                    'location' => 'Jakarta',
                ],
                [
                    'id' => '3', //3
                    'name'=> '3P Channel Strategy Development Manager',
                    'location' => 'Jakarta',
                ],
                [
                    'id' => '4', //4
                    'name'=> 'Account Executive (South Jakarta)',
                    'location' => 'Jakarta',
                ],
                [
                    'id' => '5', //5
                    'name'=> 'Android Engineer - Comms Platform',
                    'location' => 'Bengaluru',
                ],
                [
                    'id' => '6', //7
                    'name'=> 'Area Expansion Manager (East Java, Bali, and Nusa Tenggara)',
                    'location' => 'Surabaya',
                ],
                [
                    'id' => '7', //8
                        'name'=> 'Area Operations Associate',
                        'location' => 'Surabaya',
                ],
                [
                    'id' => '8', //9
                    'name'=> 'Area Operations Associate (Depok)',
                    'location' => 'Depok',
                ],
                [
                    'id' => '9', //10
                    'name'=> 'Area Operations Associate (Medan)',
                    'location' => 'Medan',
                ],
                [
                    'id' => '10', //47
                    'name'=> 'Lead Product Manager - GoFood',
                    'location' => 'Jakarta',
                ],
                [
                    'id' => '11', //49
                    'name'=> 'Lead Software Engineer - Engineering Platform',
                    'location' => 'Bengaluru',
                ],
                [
                    'id' => '12', //77
                    'name'=> 'Senior Data Warehouse Engineer',
                    'location' => 'Jakarta',
                ]
            ]
                );
    }
}
