<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolksTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('folks', function (Blueprint $table) {
            $able->increments('id');
            $table->string('firstName', 40);
            $table->string('lastName', 40);
            $table->string('nif', 15);
            $table->string('email', 60);
            $table->string('phone', 10);
            $table->enum('gender', ['1', '2', '3'])->default('3');
            $table->date('birthDate');
            $table->string('photo', 60)->default('default.png');
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
        Schema::dropIfExists('folks');
    }
}
