<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenceWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_worker', function (Blueprint $table) {
            $table->increments('id');
            // ===========================================
            $table->integer('absence_id')->unsigened();
            $table->integer('worker_id')->unsigened();
            // ===========================================
            $table->boolean('justified');
            $table->string('justificationDate')->nullable();
            $table->string('attachment')->nullable();
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
        Schema::dropIfExists('absence_worker');
    }
}
