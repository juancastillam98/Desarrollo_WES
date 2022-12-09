<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    public function compania()
    {
        return $this->belongsTo(Compania::class);
        //el belongsTo es el 1 a 1
    }
    //pivot table
    public function consolas()
    {
        return $this->belongsToMany(Consola::class, "consolas_videojuegos", "consola_id", "videojuego_id");
    }
}
