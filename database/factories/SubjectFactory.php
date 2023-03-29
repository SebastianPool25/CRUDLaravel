<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre'=>fake()->sentence(5), //para generar nombres de materia random
            'clave'=>fake()->bothify('???-####'), //??? para letras random ### para numeros random
            'ing'=>fake()->randomElement(['isc','ier','iem','ii','ie']), //para elegir random la ingenieria
            'semestre'=>fake()->randomDigitNotNull()
        ];
    }
}
