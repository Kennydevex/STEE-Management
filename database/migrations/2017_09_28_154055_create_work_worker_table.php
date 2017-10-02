<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_worker', function (Blueprint $table) {
            $table->increments('id');
            // =========================================
            $table->integer('workers_id')->unsigned();
            $table->integer('works_id')->unsigned();
            // =========================================
            $table->date('start');
            $table->date('end');
            //Esta parte esta a refirir se o trabalhador foi ao trabalho ou nao
            $table->boolean('status');
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
        Schema::dropIfExists('work_worker');
    }
}
