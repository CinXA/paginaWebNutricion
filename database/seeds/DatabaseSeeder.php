<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('CategoriasSeeder');
        $this->call('IngredientesSeeder');
        $this->call('AtributosSeeder');
        $this->call('RecetasSeeder');
        $this->call('RecetasIngredientesSeeder');
     //   $this->call('AtributosRecetasSeeder');
        $this->call('PasosSeeder');
       // $this->call('VideosSeeder');
    }
}
