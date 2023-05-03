<?php

namespace Database\Factories;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cornellnote>
 */
class CornellnoteFactory extends Factory
{
    public function definition(): array
    {
        $topic_id = Topic::all();


        $palabras = $this->faker->words(3);
        $array = implode(',', $palabras);

        return [
            'titulo' => fake()->sentence(),
            'keywords' => $array,
            'apuntes' => fake()->sentence(),
            'conclusion' => fake()->sentence(),
            'topic_id'=>$topic_id->random()
        ];
    }
}
