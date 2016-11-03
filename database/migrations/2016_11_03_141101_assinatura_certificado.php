<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssinaturaCertificado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado.assinaturacertificado', function (Blueprint $table) {
            $table->increments('ascid');
            $table->string('ascnome', 200);
            $table->string('ascimg');
            $table->integer('eveid');
            
            $table->foreign('eveid')->references('eveid')->on('certificado.evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificado.assinaturacertificado');
    }
}
