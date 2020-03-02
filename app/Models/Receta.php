<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{

    //Una Receta solo puede tener una categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id');
    }


    public function receta_ingredientes()
    {
        return $this->hasMany(RecetasIngrediente::class, 'receta_id_fk');
    }

    public function pasos()
    {
        return $this->hasMany(Paso::class, 'receta_id_fk');
    }
}

