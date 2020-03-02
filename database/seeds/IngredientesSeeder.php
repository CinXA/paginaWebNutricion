<?php

use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //-----------id= 1----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Aguacate'
        ]);
        //-----------id= 2----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Atún'
        ]);
        //-----------id= 3----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Mayonesa'
        ]);
        //-----------id= 4----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Huevo'
        ]);
        //-----------id= 5----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Cebolla'
        ]);
        //-----------id= 6----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Sal'
        ]);
        //-----------id= 7----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Pimienta'
        ]);
        //-----------id= 8----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Pan rallado'
        ]);
        //-----------id= 9----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Aceite'
        ]);
        //-----------id= 10----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Arroz'
        ]);
        //-----------id= 11----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Ajo'
        ]);
        //-----------id= 12----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Agua'
        ]);
        //-----------id= 13----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Avena'
        ]);

        //-----------id= 14----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Leche'
        ]);
        //-----------id= 15----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Azucar'
        ]);
        //-----------id= 16----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Calabaza'
        ]);
        //-----------id= 17----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Harina de Trigo'
        ]);
        //-----------id= 18----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Limón'
        ]);
        //-----------id= 19----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Almendra molida'
        ]);
        //-----------id= 20----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Canela'
        ]);
        //-----------id= 21----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Claras de huevo'
        ]);
        //-----------id= 22----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Elotes'
        ]);
        //-----------id= 23----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Epazote'
        ]);
        //-----------id= 24----------
        Ingrediente::create([
            'nombre_ingrediente'=>'Chile Serrano'
        ]);
    }
}
