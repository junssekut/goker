<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;
use Faker\Factory as Faker;

class CareerSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categories = [
            'Design',
            'Financial and Accounting',
            'Marketing and Branding',
            'Development'
        ];
        Career::whereNull('briefDescription')
            ->orWhereNull('category')
            ->orWhereNull('method')
            ->orWhereNull('status')
            ->each(function ($career) use ($faker, $categories) {
                $career->update([
                    'briefDescription' => $career->briefDescription ?? $faker->paragraph(3),
                    'category' => $career->category ?? $faker->randomElement($categories),
                    'method' => $career->method ?? $faker->randomElement(['Onsite', 'Remote', 'Hybrid']),
                    'status' => $career->status ?? $faker->randomElement(['Full Time', 'Part Time']),
                ]);
            });
    }
}
