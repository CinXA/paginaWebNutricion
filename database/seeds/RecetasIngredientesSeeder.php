<?php

use Illuminate\Database\Seeder;
use App\Models\RecetasIngrediente;

class RecetasIngredientesSeeder extends Seeder
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
        //aguacate de atun
        RecetasIngrediente::create([
            'receta_id_fk'=>'1',
            'ingrediente_id_fk'=>'1',
            'cantidad_ingrediente'=>'1'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'1',
            'ingrediente_id_fk'=>'2',
            'cantidad_ingrediente'=>'4 latas de'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'1',
            'ingrediente_id_fk'=>'3',
            'cantidad_ingrediente'=>'2 cucharadas de'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'1',
            'ingrediente_id_fk'=>'4',
            'cantidad_ingrediente'=>'1'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'1',
            'ingrediente_id_fk'=>'5',
            'cantidad_ingrediente'=>'1 pequeña'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'1',
            'ingrediente_id_fk'=>'6',
            'cantidad_ingrediente'=>'1 Pizca de'
        ]);

        //-----------id= 2----------
        //Tortillas de atun
        RecetasIngrediente::create([
            'receta_id_fk'=>'2',
            'ingrediente_id_fk'=>'2',
            'cantidad_ingrediente'=>'2 latas'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'2',
            'ingrediente_id_fk'=>'4',
            'cantidad_ingrediente'=>'1'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'2',
            'ingrediente_id_fk'=>'8',
            'cantidad_ingrediente'=>'1 taza'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'2',
            'ingrediente_id_fk'=>'5',
            'cantidad_ingrediente'=>'1/2 taza picada en cuadritos de'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'2',
            'ingrediente_id_fk'=>'6',
            'cantidad_ingrediente'=>'1 Pizca de'
        ]);

        RecetasIngrediente::create([
            'receta_id_fk'=>'2',
            'ingrediente_id_fk'=>'9',
            'cantidad_ingrediente'=>'200 mil de'
        ]);
        //---hotcakes
        RecetasIngrediente::create([
            'receta_id_fk'=>'4',
            'ingrediente_id_fk'=>'13',
            'cantidad_ingrediente'=>'1 taza de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'4',
            'ingrediente_id_fk'=>'4',
            'cantidad_ingrediente'=>'1 pieza de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'4',
            'ingrediente_id_fk'=>'14',
            'cantidad_ingrediente'=>'200 mil de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'4',
            'ingrediente_id_fk'=>'15',
            'cantidad_ingrediente'=>'2 cucharadas de'
        ]);
        //---calabazas id =5
        RecetasIngrediente::create([
            'receta_id_fk'=>'5',
            'ingrediente_id_fk'=>'16',
            'cantidad_ingrediente'=>'4 tazas de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'5',
            'ingrediente_id_fk'=>'17',
            'cantidad_ingrediente'=>'2/3 taza de '
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'5',
            'ingrediente_id_fk'=>'4',
            'cantidad_ingrediente'=>'2'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'5',
            'ingrediente_id_fk'=>'5',
            'cantidad_ingrediente'=>'1/3 taza de '
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'5',
            'ingrediente_id_fk'=>'9',
            'cantidad_ingrediente'=>''
        ]);

        //----------pastel id =6--------------
        RecetasIngrediente::create([
            'receta_id_fk'=>'6',
            'ingrediente_id_fk'=>'4',
            'cantidad_ingrediente'=>'2'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'6',
            'ingrediente_id_fk'=>'18',
            'cantidad_ingrediente'=>'1 '
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'6',
            'ingrediente_id_fk'=>'19',
            'cantidad_ingrediente'=>'90 gramos de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'6',
            'ingrediente_id_fk'=>'20',
            'cantidad_ingrediente'=>'6 gramos de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'6',
            'ingrediente_id_fk'=>'21',
            'cantidad_ingrediente'=>'2'
        ]);
        //----------pastel id =7--------------
        RecetasIngrediente::create([
            'receta_id_fk'=>'7',
            'ingrediente_id_fk'=>'22',
            'cantidad_ingrediente'=>'4'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'7',
            'ingrediente_id_fk'=>'5',
            'cantidad_ingrediente'=>'3/4 de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'7',
            'ingrediente_id_fk'=>'23',
            'cantidad_ingrediente'=>'1 ramita de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'7',
            'ingrediente_id_fk'=>'9',
            'cantidad_ingrediente'=>'1 cucharada de'
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'7',
            'ingrediente_id_fk'=>'6',
            'cantidad_ingrediente'=>''
        ]);
        RecetasIngrediente::create([
            'receta_id_fk'=>'7',
            'ingrediente_id_fk'=>'24',
            'cantidad_ingrediente'=>'(Al gusto)'
        ]);

    }
}
