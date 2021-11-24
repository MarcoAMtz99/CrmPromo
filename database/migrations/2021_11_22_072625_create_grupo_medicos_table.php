<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('responsable');
            $table->string('estado');
            $table->string('telefono');
            $table->string('fotografia');
            $table->string('otro_telefono');
            $table->string('celular');
            $table->integer('num_medicos');
            $table->string('giro');
            $table->string('slogan');
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
        Schema::dropIfExists('grupo_medicos');
    }
}
