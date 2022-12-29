<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //un cliente puede tener 1 o muchos productos
    public function productos()
    {
        //1º id del modeo actual, luego id del modelo con el que se realciona
        return $this->belongsToMany(Producto::class, "cliente_productos", "cliente_id", "producto_id");
    }
}
