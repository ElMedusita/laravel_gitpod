<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artista;
use App\Models\Concierto;
use App\Models\Sesion;

class SesionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'concierto_id'      =>Concierto::all()->random()->id,
            'artista_id'        =>Artista::all()->random()->id,

        ];
    }
}
