<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_name'=>$this->faker->randomElement(['Madrasah','Kowmi','General','Technical']),
            'user'=>$this->faker->randomNumber(2),
            'ip'=>$this->faker->ipv4(),
            'company_code'=>$this->faker->randomNumber(6),

        ];
    }
}
