<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArteMarcialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arte__marcials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

            $table->integer('academia_id')->unsigned();
            $table->foreign('academia_id')->references('id')->on('academias');

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
        Schema::dropIfExists('arte__marcials');
    }
}
