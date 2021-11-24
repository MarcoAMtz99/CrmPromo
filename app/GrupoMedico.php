<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoMedico extends Model
{
    //
     public $timestamps = true;

     protected $fillable = [
     	'id',
		'nombre',
		'responsable',
		'estado',
		'telefono',
		'fotografia',
		'otro_telefono',
		'celular',
		'num_medicos',
		'giro',
		'slogan',
		'status'
     ];
    
}



