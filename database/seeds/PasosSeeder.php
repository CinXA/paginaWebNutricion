<?php

use Illuminate\Database\Seeder;
use App\Models\Paso;

class PasosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //----------------id=1-------
        Paso::create([
            'no_paso' => 'Paso 1.',
            'descripcion' => 'Lo primero que haremos será cocer el huevo. Unos 8 minutos en agua. Retiramos y pelamos el huevo.',
            'foto' => 'img/producto/atun.jpg',
            'receta_id_fk' => '1'
        ]);

        Paso::create([
            'no_paso' => 'Paso 2.',
            'descripcion' => 'En un bol mezclamos el huevo, el atún, la cebolla, la mayonesa y sal. Si vemos que falta un poco de mayonesa para dejarlo cremoso se la añadiremos.',
            'foto' => 'img/producto/R1-P2.jpg',
            'receta_id_fk' => '1'
        ]);

        Paso::create([
            'no_paso' => 'Paso 3.',
            'descripcion' => 'Vaciamos por completo el Aguacate a la mezcla',
            'foto' => 'img/producto/R1-P3.jpg',
            'receta_id_fk' => '1'
        ]);
        Paso::create([
            'no_paso' => 'Paso 4.',
            'descripcion' => 'Incorporamos el relleno a la cascara de aguacate y listo.',
            'foto' => 'img/producto/R1-P4.jpg',
            'receta_id_fk' => '1'
        ]);

        //----------------id=2-------
        Paso::create([
            'no_paso' => 'Paso 1.',
            'descripcion' => 'Escurrir el agua del atún en lata. Cuanto más seco quede el atún más compactas serán las croquetas caseras. Para mayor precisión y comodidad, puedes utilizar un colador.',
            'foto' => 'img/producto/R2-P1.jpg',
            'receta_id_fk' => '2'
        ]);

        Paso::create([
            'no_paso' => 'Paso 2.',
            'descripcion' => 'Una vez escurrido, coloca el atún en un recipiente grande y resérvalo un momento. Pica finamente la cebolla, coge una sartén, pon aceite a calentar y, cuando esté caliente, sofríela hasta que esté transparente. Retírala y mézclala con el atún.',
            'foto' => 'img/producto/R2-P2.jpg',
            'receta_id_fk' => '2'
        ]);

        Paso::create([
            'no_paso' => 'Paso 3.',
            'descripcion' => 'Añade el huevo e intégralo en la mezcla anterior para que se unan todos los ingredientes.Agrega, también, un poco de sal al gusto si lo deseas.',
            'foto' => 'img/producto/R2-P3.jpg',
            'receta_id_fk' => '2'
        ]);
        Paso::create([
            'no_paso' => 'Paso 4.',
            'descripcion' => 'Una vez terminada la mezcla, ves cogiendo porciones, haz bolitas y aplástalas para dar a las croquetas de atún forma alargada. Luego, rebózalas por el pan rallado y ya estarán listas para freír.',
            'foto' => 'img/producto/R2-P4.jpg',
            'receta_id_fk' => '2'
        ]);
        Paso::create([
            'no_paso' => 'Paso 5.',
            'descripcion' => 'Deberás verter en una sartén el aceite suficiente para cubrir por completo los fritos de atún Cuando el aceite esté caliente, coloca las croquetas con cuidado y retíralas cuando estén bien doradas.',
            'foto' => 'img/producto/R2-P5.jpg',
            'receta_id_fk' => '2'
        ]);

        Paso::create([
            'no_paso' => 'Paso 6.',
            'descripcion' => 'Para retirar el exceso de aceite colócalas sobre papel absorbente unos minutos. ',
            'foto' => 'img/producto/R2-P6.jpg',
            'receta_id_fk' => '2'
        ]);

        //----Receta 4--------
        Paso::create([
            'no_paso' => 'Paso 1.',
            'descripcion' => 'Bate el huevo y las tres claras en un bowl. Agrega la avena, la sal y el edulcorante y mezcla bien .',
            'foto' => '',
            'receta_id_fk' => '4'
        ]);

        Paso::create([
            'no_paso' => 'Paso 2.',
            'descripcion' => 'La leche la vas a agregar a tu gusto, pero en muy poca cantidad para que la mezcla no te quede aguada. Si efectivamente te queda aguada, pon un poco más de avena.',
            'foto' => '',
            'receta_id_fk' => '4'
        ]);
        Paso::create([
            'no_paso' => 'Paso 3.',
            'descripcion' => 'En este paso puedes ponerle medio plátano cortado previamente en trozos pequeños.',
            'foto' => '',
            'receta_id_fk' => '4'
        ]);
        Paso::create([
            'no_paso' => 'Paso 4.',
            'descripcion' => 'Calienta una sartén antiadherente a fuego medio y ponle un chorro muy pequeño de aceite vegetal.',
            'foto' => '',
            'receta_id_fk' => '4'
        ]);
        Paso::create([
            'no_paso' => 'Paso 5.',
            'descripcion' => 'Con una cuchara sirve un poco de la mezcla y échala de manera uniforme sobre la sartén. Cocina hasta que empiecen a hacerse burbujas sobre la superficie de la tortita. Voltéala y cocina un par de minutos por el otro lado.',
            'foto' => '',
            'receta_id_fk' => '4'
        ]);

        Paso::create([
            'no_paso' => 'Paso 6.',
            'descripcion' => 'Repite este proceso con todas tus tortitas de avena hasta que se termine la mezcla.',
            'foto' => '',
            'receta_id_fk' => '4'
        ]);
        //----Receta 5--------
        Paso::create([
            'no_paso' => 'Paso 1.',
            'descripcion' => 'Coloca las calabazas ralladas sobre un colador y espolvorea con sal; deja reposar por 10 minutos.',
            'foto' => '',
            'receta_id_fk' => '5'
        ]);
        Paso::create([
            'no_paso' => 'Paso 2.',
            'descripcion' => ' Aprienta con tus manos para retirar el exceso de agua y reserva en un bowl grande.',
            'foto' => '',
            'receta_id_fk' => '5'
        ]);
        Paso::create([
            'no_paso' => 'Paso 3.',
            'descripcion' => ' Agrega la harina, los huevos, los tallos de cebolla, sal y pimienta. Mezcla hasta combinar.',
            'foto' => '',
            'receta_id_fk' => '5'
        ]);
        Paso::create([
            'no_paso' => 'Paso 4.',
            'descripcion' => 'Añade el aceite en un sartén a fuego medio. COLOCA una a dos cucharadas y da forma a las tortitas. Cocina cada lado de 2 a 3 minutos o hasta que se doren ligeramente. ',
            'foto' => '',
            'receta_id_fk' => '5'
        ]);
        Paso::create([
            'no_paso' => 'Paso 5.',
            'descripcion' => 'Sirve con un poco de crema o salsa de tu preferencia. ',
            'foto' => '',
            'receta_id_fk' => '5'
        ]);

        //----Receta 6--------
        Paso::create([
            'no_paso' => 'Paso 1.',
            'descripcion' => 'Precalienta el horno a 180 ºC y mezcla la zanahoria rallada finamente con el jugo de la mitad del limón.',
            'foto' => '',
            'receta_id_fk' => '6'
        ]);
        Paso::create([
            'no_paso' => 'Paso 2.',
            'descripcion' => 'Bate los huevos usando batidora, y cuando estén listos incopora la avellana, la almendra, las especias y el bicarbonato',
            'foto' => '',
            'receta_id_fk' => '6'
        ]);
        Paso::create([
            'no_paso' => 'Paso 3.',
            'descripcion' => 'Añade la zanahoria a esta mezcla removiendo todo bien hasta que quede homogéneo.',
            'foto' => '',
            'receta_id_fk' => '6'
        ]);
        Paso::create([
            'no_paso' => 'Paso 4.',
            'descripcion' => 'Monta aparte las claras de huevo y añádelas poco a poco a la mezcla anterior.',
            'foto' => '',
            'receta_id_fk' => '6'
        ]);
        Paso::create([
            'no_paso' => 'Paso 5.',
            'descripcion' => 'Introduce todo en un molde y hornea durante 40 minutos.',
            'foto' => '',
            'receta_id_fk' => '6'
        ]);
        Paso::create([
            'no_paso' => 'Paso 6.',
            'descripcion' => 'Si quieres hacerlo más dulce, puedes echar un poco de azúcar en polvo por encima, aunque recuerda que le estarás añadiendo más calorías',
            'foto' => '',
            'receta_id_fk' => '6'
        ]);

        //----Receta 7--------
        Paso::create([
            'no_paso' => 'Paso 1.',
            'descripcion' => 'Limpia los elotes; retira las hojas y cabellitos, corta con un cuchillo para separar los granos del elote y reserva.',
            'foto' => '',
            'receta_id_fk' => '7'
        ]);
        Paso::create([
            'no_paso' => 'Paso 2.',
            'descripcion' => 'Pica finamente el chile y la cebolla; reserva. Desinfecta el epazote, seca, pica finamente y reserva.  ',
            'foto' => '',
            'receta_id_fk' => '7'
        ]);
        Paso::create([
            'no_paso' => 'Paso 3.',
            'descripcion' => 'Calienta el aceite a fuego medio bajo, sofríe el chile con la cebolla y agrega los granos de elote, el epazote y sal al gusto. Tapa y deja cocinar, moviendo de vez en cuando.Comprueba que los granos de elote estén tiernos y bien cocidos.',
            'foto' => '',
            'receta_id_fk' => '7'
        ]);
        Paso::create([
            'no_paso' => 'Paso 4.',
            'descripcion' => 'Monta aparte las claras de huevo y añádelas poco a poco a la mezcla anterior.',
            'foto' => '',
            'receta_id_fk' => '7'
        ]);
        Paso::create([
            'no_paso' => 'Paso 5.',
            'descripcion' => 'Comprueba el punto de sal y mantén tapados hasta servir.',
            'foto' => '',
            'receta_id_fk' => '7'
        ]);
        Paso::create([
            'no_paso' => 'Paso 6.',
            'descripcion'=>'Vierte los granos en un vaso o tazón, agrega mayonesa, jugo de limón, queso rallado y chiles al gusto.',
            'foto' => '',
            'receta_id_fk' => '7'
        ]);

    }
}
