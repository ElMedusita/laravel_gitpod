<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function artista()
    {
        return $this-> belongsTo(Artista::class);
    }

}
