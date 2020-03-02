<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-----------id= 1----------
        Categoria::create([
            'nombre_categoria'=>'Ensaladas'
        ]);
        //-----------id= 2----------
        Categoria::create([
            'nombre_categoria'=>'Platillos Principales'
        ]);
        //-----------id= 3----------
        Categoria::create([
            'nombre_categoria'=>'Desayunos'
        ]);
        //-----------id= 4----------
        Categoria::create([
            'nombre_categoria'=>'Cenas'
        ]);
        //-----------id= 5----------
        Categoria::create([
            'nombre_categoria'=>'Postre'
        ]);
        //-----------id= 6----------
        Categoria::create([
            'nombre_categoria'=>'Bocadillos'
        ]);
        //-----------id= 7----------
        Categoria::create([
            'nombre_categoria'=>'Acompañamiento'
        ]);
    }
}
