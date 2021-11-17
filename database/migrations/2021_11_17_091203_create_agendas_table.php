<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_medico');
            $table->integer('status');
            $table->integer('usuarioCreacionId');
            $table->integer('usuarioActualizacionId');
            $table->integer('id_consultorio');
            $table->integer('paciente');
            $table->string('fecha_consulta');
            $table->string('hora_consulta');
            $table->string('aseguradora');
            $table->string('mail');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('telefono3');
            $table->integer('consultaPrimeraVez');
            $table->integer('consultaSubsecuente');
            $table->integer('consultaPreferencial1');
            $table->integer('consultaPreferencial2');
            $table->integer('consultaRevision');
            $table->integer('consultaEstudios');
            $table->integer('consultaUrgencia');
            $table->integer('costoConsulta');
            $table->string('recado');
            $table->string('comoSeEntero');
            $table->string('edad');
            $table->string('tutor');
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
        Schema::dropIfExists('agendas');
    }
}
