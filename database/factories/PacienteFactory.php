<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        //
        'nombre'=>$faker->name,
		'paterno'=>$faker->firstName,
		'materno'=>$faker->lastName,
		'nacimiento'=>$faker->randomDigit,
		'edad'=>$faker->randomDigit,
		'tutor'=>$faker->randomDigit,
		'tutor_nacimiento'=>$faker->randomDigit,
		'tutor_edad'=>$faker->randomDigit,
		'email'=>$faker->unique()->email,
		'telefono'=>$faker->phoneNumber,
		'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
		'facebook'=>$faker->sentence(),
		'sexo'=>$faker->randomDigit,
		'pais'=>$faker->randomDigit,
		'estado'=>$faker->randomDigit,
		'estado_civil'=>$faker->randomDigit,
		'hijos'=>$faker->randomDigit,
		'escolaridad'=>$faker->randomDigit,
		'ocupacion'=>$faker->randomDigit,
		'servicio_medico'=>$faker->randomDigit,
		'gastos_medicos'=>$faker->randomDigit,
		'comentarios'=>$faker->sentence(),
		'recibe_informacion'=>$faker->randomDigit,
		'intereses'=>$faker->sentence(),
		'status'=>$faker->randomDigit,
    ];
});
