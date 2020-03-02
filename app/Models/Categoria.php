<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Una Receta solo puede tener una categoria
    public function recetas()
    {
        return $this->hasMany(Receta::class,'categoria_id_fk');
    }
}
