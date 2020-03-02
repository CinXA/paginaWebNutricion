<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    //
    protected function search(Request $request){

        $this->validate($request,[
            'nombre' => ['required','string','max:100'],
        ]);

        $busqueda=$request->input('nombre');

        $recetas = Receta::where('nombre_receta','LIKE','%'.$busqueda.'%')->get();
        $bandera=$recetas->isEmpty();
        return view('partials.resultadoBusqueda', compact('recetas','busqueda','bandera'));

    }
}
