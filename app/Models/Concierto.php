<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Concierto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $casts = [
        'fecha' => 'datetime:Y-m-d',
    ];
    public function artista()
    {
        return $this-> belongsTo(Artista::class);
    }

public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}




