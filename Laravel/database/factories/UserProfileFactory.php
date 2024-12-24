<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    protected $model = UserProfile::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // This will create a new user via User factory
            'name' => $this->faker->name,
            'nickname' => $this->faker->word,
            'birth_place' => $this->faker->word,
            'dob' => $this->faker->date,
            'gender' => $this->faker->randomElement(['F', 'M']),
            'domicile' => $this->faker->city,
            'education_level' => $this->faker->randomElement(['SMA / K', 'D3', 'S1', 'S2', 'S3']),
            'school' => $this->faker->company,
            'major' => $this->faker->word,
            'experience' => $this->faker->sentence,
        ];
    }
}
