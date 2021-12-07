<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    //VISTA DE LA AGENDA PRINCIPAL
    Route::get('/Agenda', 'AgendaController@index')->name('Agenda');
    //METODO RESOURCE PACIENTE
	Route::resource('/paciente','PacienteController');
	//METODO RESOURCE MEDICO
	Route::resource('/medico','MedicoController');

	//CREAR NUEVOS USUARIOS
	Route::resource('users',UserController::class);
	
});
