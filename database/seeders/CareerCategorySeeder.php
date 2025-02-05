<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('career_category')->insert([
            ['category_name' => 'Design'],
            ['category_name' => 'Financial and Accounting'],
            ['category_name' => 'Marketing and Branding'],
            ['category_name' => 'Development'],
        ]);
    }
}
