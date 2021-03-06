<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialWorkTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('material_work', function (Blueprint $table) {
            $table->increments('id');
            // =========================================
            $table->integer('materials_id')->unsigned();
            $table->integer('works_id')->unsigned();
            // =========================================
            //Esta parte corresponde a tipo de transação de material, que pode ser 1 (Urgente) ou 2 (Para enviar depois de uma determinada data)
            $table->enum('pending', ['1', '2'])->default('1');
            //Este atributo ira armazenar o estado da transação, ou seja, se o material foi relamente enviado ou se esta por enviar.
            $table->boolean('status');
            $table->timestamps();

            //Relacionamentos
            $table->foreign('works_id')->references('id')->on('works')->onDelete('cascade');
            $table->foreign('materials_id')->references('id')->on('materials')->onDelete('cascade');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('material_work');
    }
}
