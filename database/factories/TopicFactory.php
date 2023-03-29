<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * //@return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tema'=>fake()->sentence(),
            'unidad'=>fake()->randomDigitNot([7,8,9])
        ];
    }
}
