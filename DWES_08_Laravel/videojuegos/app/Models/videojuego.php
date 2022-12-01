<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videojuego extends Model
{
    use HasFactory;
    public function compania()
    {
        return $this->belongsTo(Compania::class);
        //el belongsTo es el 1 a 1
    }
}
