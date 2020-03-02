<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    //
    protected function categorias(){
        $categorias=Categoria::paginate(6);
        return view('productos.categorias',compact('categorias'));

    }

    protected function mostrarCategoria($id){
        $categorias=Categoria::find($id);
        $nom=$categorias->nombre_categoria;
        $recetasC=$categorias->recetas;
        if ($recetasC->first()==null){
           $bandera=false;
        }else {
            $bandera=true;
        }
        return view('partials.RecetasCategoria',compact('recetasC','bandera','nom'));
    }
}
