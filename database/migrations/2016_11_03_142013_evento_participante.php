<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoParticipante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado.eventoparticipante', function (Blueprint $table) {
            $table->increments('evpid');
            $table->integer('eveid');
            $table->integer('parid');

            $table->foreign('eveid')->references('eveid')->on('certificado.evento');
            $table->foreign('parid')->references('parid')->on('certificado.participante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificado.eventoparticipante');
    }
}
