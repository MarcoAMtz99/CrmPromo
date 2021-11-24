<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
     public $timestamps = true;

     protected $fillable = [
     	'id',
     	'nombre',
		'paterno',
		'materno',
		'sexo',
		'nacimiento_fecha',
		'nacionalidad',
		'nacimiento_lugar',
		'rfc',
		'calle',
		'num_exterior',
		'num_interior',
		'num_piso',
		'id_cp',
		'fotografia',
		'num_cedula',
		'num_recer',
		'fecha_recer',
		'status',
		'usuario_id',
		'usuario_update_id',
		'tipoMedico',
		'giro',
		'slogan',
		'id_grupo',
		'medios_digitales',
		'servicios',
		'archivos',
		'video'

     ];

}



