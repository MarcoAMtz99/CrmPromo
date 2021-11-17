<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nacimiento');
            $table->integer('edad');
            $table->string('tutor');
            $table->string('tutor_nacimiento');
            $table->integer('tutor_edad');
            $table->string('email');
            $table->string('telefono');
            $table->string('password');
            $table->string('facebook');
            $table->integer('sexo');
            $table->integer('pais');
            $table->integer('estado');
            $table->integer('estado_civil');
            $table->integer('hijos');
            $table->integer('escolaridad');
            $table->integer('ocupacion');
            $table->integer('servicio_medico');
            $table->integer('gastos_medicos');
            $table->string('comentarios');
            $table->integer('recibe_informacion');
            $table->string('intereses');
            $table->integer('status');
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
        Schema::dropIfExists('pacientes');
    }
}
