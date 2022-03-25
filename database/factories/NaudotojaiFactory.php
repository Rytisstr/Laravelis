<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Naudotojai>
 */
class NaudotojaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vardas_pavarde' => $this->faker->name(),
            'el_pastas' => $this->faker->unique()->safeEmail(),
            'telefono_numeris' => $this->faker->numberBetween(80000, 90000),
            'gyvenamoji_vieta' =>$this->faker->address(),
            'prierasas' =>$this->faker->sentence()
        ];
    }
}
