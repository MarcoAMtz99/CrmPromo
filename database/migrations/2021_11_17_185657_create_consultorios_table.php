<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_medico');
            $table->string('nombre');
            $table->string('estado');
            $table->string('calle');
            $table->string('exterior');
            $table->string('interior');
            $table->integer('codigo_postal');
            $table->string('colonia');
            $table->integer('status');
            $table->string('ciudad');
            $table->string('municipio');
            $table->integer('consultaPrimera');
            $table->integer('consultaSubsecuente');
            $table->integer('consultaPreferente');
            $table->string('giro');
            $table->string('slogan');
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
        Schema::dropIfExists('consultorios');
    }
}
