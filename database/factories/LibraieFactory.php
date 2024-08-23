<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\libraie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libraie>
 */
class LibraieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book'=>$this->faker->sentence(6),
            'stu_id'=>$this->faker->numberBetween(1,20),
        ];
    }
}
