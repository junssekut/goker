<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Career;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'user',
            'email' => 'test@example.com',
            'password' =>'12345678',
            'role' => 'user'
        ]);

        User::factory()->create([
            'name' => 'hrd',
            'email' => 'hrd@example.com',
            'password' =>'hrd',
            'role' => 'hrd'
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' =>'admin',
            'role' => 'admin'
        ]);

        $this->call(CareerSeeder::class);
        $this->call(DetailCareerSeeder::class);


    }
}
