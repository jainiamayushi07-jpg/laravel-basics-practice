<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => fake()->name(),
            'email'=>fake()->email(),
            'age'=>fake()->numberBetween(15,20),
            'password'=>fake()->password(),
            'phonenumber'=>fake()->phoneNumber(),
            'address'=>fake()->address(),
            'parents_name'=>fake()->name()

            //
        ];
    }
}
