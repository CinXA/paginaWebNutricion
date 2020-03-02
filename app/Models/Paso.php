<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paso extends Model
{

    public function recetas()
    {
        return $this->belongsTo(Receta::class,'id');
    }
}
