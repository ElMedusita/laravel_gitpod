<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Concierto;

class ConciertoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fecha=$this->faker->dateTimeBetween('+1 months', '+10 months');
        $fecha2=$fecha->format('d-m-Y');
        return [
            'precio'            =>$this->faker->randomNumber(2),
            'fecha'             =>$fecha2,
            'hora'              =>$this->faker->date('H:i'/*, rand(36000,82800)*/),
            'lugar'             =>$this->faker->state(),
            'correo_contacto'   =>$this->faker->email(),
            'web'               =>$this->faker->domainName(),
        ];
    }
}
