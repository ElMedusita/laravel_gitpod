<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Concierto;
use App\Models\Reserva;

class ReservaFactory extends Factory
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
            'fecha_reserva'     =>$this->faker->dateTimeBetween('-10 months', 'now'),
            'hora_reserva'      =>$this->faker->time($format = 'H:i'),
            'concierto_id'      =>Concierto::all()->random()->id,
        ];
    }
}
