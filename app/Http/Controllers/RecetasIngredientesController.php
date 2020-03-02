<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Ingrediente;
use App\Models\Categoria;

class RecetasIngredientesController extends Controller
{
    protected function index()
    {
        $sugerencias=Receta::where('categoria_id_fk','2')->take(3)->get();
       //return view('productos.principal', compact('sugerencias','bandera'));
      //  dd($sugerencias);
        $recetas = Receta::paginate(9);
        if ($recetas->isNotEmpty() and $recetas->count() > 0) {
            return view('productos.principal', compact('recetas','sugerencias'));
        }
    }

    public function mostrarReceta($id)
    {
        $receta = Receta::find($id);
        $pasos = $receta->pasos;
        $cantidades = $receta->receta_ingredientes;
        $collection = collect();


        foreach ($cantidades as $user) {
            $a = Ingrediente::where('id', $user->ingrediente_id_fk)->value('nombre_ingrediente');
            $user->nombre_ingrediente = $a;
            $collection->push($user);
        }
        return view('partials.recetaCompleta', compact('receta', 'pasos', 'collection'));
    }

    protected function listaReceta()
    {
        $recetas = Receta::paginate(6);
        return view('partials.ListaRecetas', compact('recetas'));
    }

    protected function show(Request $request)
    {
        $receta = Receta::where('id', $request->id)->firstOrFail();
        return $receta;
    }
    protected function busIngre(Request $request)
    {
        $this->validate($request,[
            'i1' => ['required','string','max:100'],
            'i2' => ['required','string','max:100'],
        ]);
        $i1 = $request->input('i1');
        $i2 = $request->input('i2');
        $recetas = collect();
        $busqueda= $i1.' y '.$i2;

        //BUSQUEDA EN INGREDIENTES

        if(Ingrediente::where('nombre_ingrediente',$i1)->get()->isNotEmpty()){
            $ing=Ingrediente::where('nombre_ingrediente', $i1)->first()->receta_ingrediente;
            foreach ($ing as $i)
            {
                $re=Receta::where('id',$i->receta_id_fk)->first();
                $recetas->push($re);
            }
            $bandera1="true";
        }else{
            $bandera1='false';
        }
        if (Ingrediente::where('nombre_ingrediente',$i2)->get()->isNotEmpty()){
            $ing2=Ingrediente::where('nombre_ingrediente', $i2)->first()->receta_ingrediente;

            foreach ($ing2 as $i2)
            {
                $recetas->push(Receta::where('id',$i2->receta_id_fk)->first());
            }
            $bandera2="true";
        }else{
            $bandera2="false";
        }
        //------------------------


        return view('partials.resultadoBusquedaIngrediente', compact('recetas','busqueda','bandera1','bandera2'));

    }
    protected function sugerencias(){
        $sugerencias=Receta::where('categoria_id_fk','2')->take(3)->get();
            return view('productos.sugerencias', compact('sugerencias'));

    }

}