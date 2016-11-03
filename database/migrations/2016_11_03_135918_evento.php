<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado.evento', function (Blueprint $table) {
            $table->increments('eveid');
            $table->string('evenome', 200);
            $table->text('evetexto');
            $table->string('eveimgcabecalho');
            $table->string('eveimgrodape');
            $table->timestamp('evedatacadastro')->useCurrent = true;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificado.evento');
    }
}
