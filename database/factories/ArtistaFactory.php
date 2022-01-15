<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artista;

class ArtistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'            =>$this->faker->name(),
            'email'             =>$this->faker->email(),
            'telefono'          =>$this->faker->phoneNumber(),
            'procedencia'       =>$this->faker->state(),
            'fecha_nacimiento'  =>$this->faker->dateTimeBetween('-65 years', '-18 years'), //el artista más joven habrá nacido el 10-10-2010 
        ];
    }
}
