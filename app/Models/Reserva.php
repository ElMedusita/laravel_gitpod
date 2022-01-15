<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $casts = [
        'fecha_reserva' => 'datetime:Y-m-d',
    ];

    public function concierto()
    {
        return $this->belongsTo(Concierto::class);
    }
}

