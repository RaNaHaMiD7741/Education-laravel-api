<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\institutes>
 */
class InstituteFactory extends Factory
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
            'eiin'=>$this->faker->randomNumber(8),
            'type'=>$this->faker->randomElement(['MPO', 'Private']),
            'category'=>$this->faker->randomElement(['General', 'Madrasah']),
            'sub_category'=>$this->faker->randomElement(['School & College', 'Dakhil Madrasah']),
            'district'=>$this->faker->randomElement(['Kushtia', 'Dhaka']),
            'ps'=>$this->faker->randomElement(['Parankhali', 'Mirpur','Banani','Gulshan']),
            'user'=>$this->faker->userName(),
            'ip'=>$this->faker->ipv4(),
            'address'=>$this->faker->address(),
            'head'=>$this->faker->name(),
            'asst_head'=>$this->faker->name(),
            'clerk'=>$this->faker->jobTitle(),
            'mobile'=>'01'. $this->faker->numerify('##########'),
            'union'=>$this->faker->city(),
            'village'=>$this->faker->streetName(),
            'area'=>$this->faker->streetAddress(),
            'word'=>$this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]),
            'president'=>$this->faker->name(),
            'president_mob'=>'01'. $this->faker->numerify('##########'),
            'logo'=>$this->faker->imageUrl($width = 100, $height = 100),
            'rating'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
            'status'=>$this->faker->randomElement([1, 2, 3, 4]),
            'stablish'=>$this->faker->dateTimeThisCentury->format('Y-m-d'),
            'institute_creator'=>$this->faker->name(),
            'avatar'=>$this->faker->imageUrl($width = 100, $height = 100, 'people'),
            'approved_for'=>$this->faker->randomDigit(),
            'approved_shift'=>$this->faker->randomDigit(),
            'tqty'=>$this->faker->randomDigit(),
            'sqty'=>$this->faker->randomDigit(),



        ];
    }
}
