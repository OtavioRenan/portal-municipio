<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaSecretarias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('contato_id')->unsigned();
            $table->foreign('contato_id')->references('id')->on('contatos');
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
        Schema::dropIfExists('secretarias');
    }
}
