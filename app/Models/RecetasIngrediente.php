<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecetasIngrediente extends Model
{

    public function receta()
    {
        return $this->belongsTo(Receta::class,'id');
    }

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class,'id');
    }

}
