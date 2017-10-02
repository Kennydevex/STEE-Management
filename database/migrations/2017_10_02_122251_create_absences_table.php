<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //Tipos de faltas que pode estar relacionado ao trabalho
            // ====================================================
            $table->integer('types_id')->unsigned();
            // ====================================================
            $table->integer('salaryPercentage');
            $table->text('description');
            $table->timestamps();

            //Relacionamentos
            $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
