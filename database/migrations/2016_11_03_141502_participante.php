<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Participante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado.participante', function (Blueprint $table) {
            $table->increments('parid');
            $table->string('parnome');
            $table->char('parcpf',11)->unique();
            $table->string('parnomesocial');
            $table->string('paremail',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificado.participante');
    }
}
