<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->company(),
            'eiin'=>$this->faker->randomNumber(8),
            'quantity'=>$this->faker->randomNumber(4),
            'A+'=>$this->faker->randomNumber(3),
            'A'=>$this->faker->randomNumber(3),
            'A-'=>$this->faker->randomNumber(3),
            'B'=>$this->faker->randomNumber(3),
            'C'=>$this->faker->randomNumber(3),
            'D'=>$this->faker->randomNumber(4),
            'Fails'=>$this->faker->randomNumber(4),
        ];
    }
}
