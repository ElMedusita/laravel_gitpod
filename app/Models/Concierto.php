<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Concierto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function artistas()
    {
        return $this-> belongsTo(Artista::class);
    }

public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}




