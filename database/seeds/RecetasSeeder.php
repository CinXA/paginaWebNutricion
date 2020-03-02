<?php

use Illuminate\Database\Seeder;
use App\Models\Receta;

class RecetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-----------id= 1----------
        Receta::create([
            'nombre_receta'=>'Aguacate relleno de atún',
            'desc_receta'=>'Deliciosa ensalada de atún dentro de un aguacate.',
            'categoria_id_fk'=>'1',
            'foto_final'=>'img/producto/aguacate.jpg'
        ]);
        //-----------id= 2----------
        Receta::create([
            'nombre_receta'=>'Croquetas de atún',
            'desc_receta'=>'Exquisitas croquetas de atún',
            'categoria_id_fk'=>'7',
            'foto_final'=>'img/producto/atun.jpg'
        ]);
        //-----------id= 3----------
        Receta::create([
            'nombre_receta'=>'Arroz',
            'desc_receta'=>'El arroz es un cereal con excelentes propiedades nutritivas.',
            'categoria_id_fk'=>'2',
            'foto_final'=>'img/producto/arroz.jpg'
        ]);
        //-----------id= 4----------
        Receta::create([
            'nombre_receta'=>'Hot cakes de avena',
            'desc_receta'=>'Un buen desayuno para empezar el dia',
            'categoria_id_fk'=>'3',
            'foto_final'=>'img/producto/hotcakes.jpg'
        ]);
        //-----------id=5----------
        Receta::create([
            'nombre_receta'=>'Tortitas de calabaza',
            'desc_receta'=>'Tortitas de calabaza fáciles ¡con solo 5 ingredientes!',
            'categoria_id_fk'=>'2',
            'foto_final'=>'img/producto/calabaza.jpg'
        ]);
        //-----------id=6----------
        Receta::create([
            'nombre_receta'=>' Pastel de zanahoria y frutos secos',
            'desc_receta'=>'Delicioso pastel de zanahoria y frutos secos',
            'categoria_id_fk'=>'5',
            'foto_final'=>'img/producto/zanahoria.jpg'
        ]);

        //-----------id=7----------
        Receta::create([
            'nombre_receta'=>'Esquites',
            'desc_receta'=>'Deliciosos esquites',
            'categoria_id_fk'=>'4',
            'foto_final'=>'img/producto/esquites.jpg'
        ]);


    }
}
