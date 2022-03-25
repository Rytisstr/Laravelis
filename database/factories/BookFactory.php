<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'title' =>$this->faker->name(),
            'release_date' =>$this->faker->date(),
            'price' => rand(100,200),
            'description' => $this->faker->text,
        ];
    }
}
