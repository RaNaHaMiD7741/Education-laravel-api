<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ManagingCommite>
 */
class ManagingCommiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'institute_name'=>$this->faker->company(),
            'type'=>$this->faker->randomElement(['MPO','Dakhil']),
            'commity_type'=>$this->faker->randomElement(['Adhoc','Regular']),
            'commity_head'=>$this->faker->name(),
        ];
    }
}
