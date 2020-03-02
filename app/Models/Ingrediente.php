<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function receta_ingrediente()
    {
        return $this->hasMany(RecetasIngrediente::class,'ingrediente_id_fk');
    }
}
