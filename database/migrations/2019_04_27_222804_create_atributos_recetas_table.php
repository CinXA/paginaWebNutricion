<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributosRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos_recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('receta_id_fk');
            $table->unsignedBigInteger('atributo_id_fk');
            $table->string('desc_atributo');
            $table->timestamps();

            $table->foreign('receta_id_fk')
                ->references('id')
                ->on('recetas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('atributo_id_fk')
                ->references('id')
                ->on('atributos')
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
        Schema::dropIfExists('atributos_recetas');
    }
}
