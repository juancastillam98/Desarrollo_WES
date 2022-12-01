<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;

    public function videojuegoss()
    {
        return $this->hasMany(videojuego::class);
    }
}
