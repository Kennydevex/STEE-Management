<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->float('price');
            $table->text('description');
            //Esta parte refere ao estado de material quanto a sua aquisição, ou seja se foi fiado, pagado totalmente ou pagad parcialmente
            $table->enum('acquisitionStatus', ['1','2','3']);
            // ==================================
            $table->integer('types_id');
            // ==================================
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
        Schema::dropIfExists('materials');
    }
}
