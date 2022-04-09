<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_dos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 75);
            $table->string('address', 250);
            $table->string('phone', 25);
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('tabla_unos');
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
        Schema::dropIfExists('tabla_dos');
    }
}
