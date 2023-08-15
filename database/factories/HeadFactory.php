<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\head>
 */
class HeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'institute'=>$this->faker->company(),
            'type'=>$this->faker->randomElement(['MPO','Private']),
            'designation'=>$this->faker->randomElement(['Principal', 'Vice Principal', 'Teacher', 'Clerk', 'Librarian', 'Accountant', 'Guard', 'Janitor', 'Lab Technician']),
            'education'=>$this->faker->randomElement(['Primary', 'Secondary', 'Higher Secondary', 'Diploma', 'Bachelor', 'Master', 'PhD']),
            'flag'=>$this->faker->randomElement(['head']),


        ];
    }
}
