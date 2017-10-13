<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 40);
            $table->string('lastName', 40);
            $table->string('email', 60);
            $table->string('password');
            $table->enum('gender', ['1', '2', '3'])->default('3');
            $table->boolean('active')->default(false);
            $table->string('avatar', 60)->default('default.png');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
