<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = Category::pluck('id')->toArray();
        return [
            'name'=>$this->faker->randomElement(['Dakhil Madrasah','Aleya Madrasah','School & College','TSC']),
            'users'=>$this->faker->randomNumber(2),
            'ip'=>$this->faker->ipv4(),
            'company_code'=>$this->faker->randomNumber(6),
            'category_id'=>$this->faker->randomElement($data),
        ];
    }
}
