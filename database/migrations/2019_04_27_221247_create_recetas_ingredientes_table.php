<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas_ingredientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('receta_id_fk');
            $table->unsignedBigInteger('ingrediente_id_fk');
            $table->string('cantidad_ingrediente');
            $table->timestamps();

            $table->foreign('receta_id_fk')
                ->references('id')
                ->on('recetas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ingrediente_id_fk')
                ->references('id')
                ->on('ingredientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas_ingredientes');
    }
}
