<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixedCostWorkTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('fixedCost_work', function (Blueprint $table) {
            $table->increments('id');
            // =========================================
            $table->integer('works_id')->unsigned();
            $table->integer('fixedCosts_id')->unsigned();
            // =========================================
            $table->timestamps();

            //Relacionamentos
            $table->foreign('works_id')->references('id')->on('works')->onDelete('cascade');
            $table->foreign('fixedCosts_id')->references('id')->on('fixedCosts')->onDelete('cascade');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('fixedCost_work');
    }
}
