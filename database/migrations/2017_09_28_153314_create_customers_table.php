<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    { 
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            // ========================================
            $table->integer('folks_id')->unsigned();
            $table->integer('types_id')->unsigned();
            // ========================================
            $table->timestamps();

            //Relacionamentos
            $table->foreign('folks_id')->references('id')->on('folks')->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
}
