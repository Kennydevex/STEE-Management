<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    // por analisar
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('beginning');
            $table->date('conclusion');
            $table->float('budget');
            $table->integer('custumers_id')->undifined();
            $table->integer('types_id')->undifined();
            $table->timestamps();
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
