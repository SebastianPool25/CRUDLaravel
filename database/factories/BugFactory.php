<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;


class BugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $subject= Subject::all();
    
        return [
            //

                'description' => fake()->paragraph(3),
                'codigo' => fake()->optional()->randomElement(['error 404', 'error de sintaxis','error 500','SQL']),
                'solution' => fake()->paragraph(3),
                'estado' => fake()->numberBetween(1,5),
                'plataforma' => fake()->randomElement(['vuejs','laravel','php','tailwindcss','codeigniter']),
                'subject_id'=>$subject->random()

        ];
    }
}
