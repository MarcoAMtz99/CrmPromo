<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('sexo');
            $table->string('nacimiento_fecha');
            $table->string('nacionalidad');
            $table->string('nacimiento_lugar');
            $table->string('rfc');
            $table->string('calle');
            $table->integer('num_exterior');
            $table->integer('num_interior');
            $table->integer('num_piso');
            $table->integer('id_cp');
            $table->string('fotografia');
            $table->bigInteger('num_cedula');
            $table->integer('num_recer');
            $table->string('fecha_recer');
            $table->integer('status');
            $table->integer('usuario_id');
            $table->integer('usuario_update_id');
            $table->integer('tipoMedico');
            $table->string('giro');
            $table->string('slogan');
            $table->integer('id_grupo');
            $table->integer('medios_digitales');
            $table->integer('servicios');
            $table->string('archivos');
            $table->string('video');   
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
        Schema::dropIfExists('medicos');
    }
}
