<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artista;
use App\Models\Concierto;
use App\Models\Sesion;
use App\Models\Reserva;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artista::factory()->count(50)->create();
        Concierto::factory()->count(17)->create();
        Sesion::factory()->count(750)->create();
        Reserva::factory()->count(1000)->create();
    }
}
