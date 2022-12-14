<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
        //el belongsTo es el 1 a 1
    }

    //un cliente puede tener 1 o muchos productos
    public function productos()
    {
        //1º id del modeo actual, luego id del modelo con el que se realciona
        return $this->belongsToMany(Cliente::class, "cliente_productos", "producto_id", "cliente_id");
    }
}
