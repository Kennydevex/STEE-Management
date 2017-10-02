<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->float('salary');
            // ================================
            $table->integer('folks_id')->unsigned();
            $table->integer('types_id')->unsigned();
            // ================================
            $table->timestamps();
            // Relacionamentos
            $table->foreign('folks_id')->references('id')->on('folks')->onDelete('cascade');
            $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');

            // Relação
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
