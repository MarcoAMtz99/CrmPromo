<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public $timestamps = true;

     protected $fillable = [
     	'id',
        'nombre',
		'paterno',
		'materno',
		'nacimiento',
		'edad',
		'tutor',
		'tutor_nacimiento',
		'tutor_edad',
		'email',
		'telefono',
		'password',
		'facebook',
		'sexo',
		'pais',
		'estado',
		'estado_civil',
		'hijos',
		'escolaridad',
		'ocupacion',
		'servicio_medico',
		'gastos_medicos',
		'comentarios',
		'recibe_informacion',
		'intereses',
		'status',
		'created_at',
		'updated_at'
    ];
    
}
