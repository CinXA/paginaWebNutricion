<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_paso');
            $table->string('descripcion');
            $table->string('foto',1000)->nullable();
            $table->unsignedBigInteger('receta_id_fk');
            $table->timestamps();

            $table->foreign('receta_id_fk')
                ->references('id')
                ->on('recetas')
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
        Schema::dropIfExists('PasosSeeder');
    }
}
